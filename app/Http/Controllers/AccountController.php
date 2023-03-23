<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;





class AccountController extends Controller
{
    public function login(Request $request)
    {
        // Validate the user's credentials
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $remember = $request->input('remember');

        // Query the database to check if the user exists
        $user = DB::connection('Me_MuOnline')->selectOne("SELECT * FROM [Me_MuOnline].dbo.MEMB_INFO WHERE memb___id = ?", [
            $username,
        ]);

        if (!$user) {
            return response()->json(['message' => 'Invalid username'], 401);
        }

        // Verify the password hash
        if (password_verify($password, $user->memb__pwd)) {
            return response()->json(['message' => 'Invalid password'], 401);
        }

        // Generate a new session token
        $sessionToken = Str::random(60);

        // Generate a new remember token if "remember me" is checked
        $rememberToken = null;
        if ($remember) {
            $rememberToken = Str::random(60);
            $expires = now()->addYears(1);
        }

        // Update the user's session data and the database with the session and remember tokens
        session()->put('session_token', $sessionToken);
        DB::connection('Me_MuOnline')->update("UPDATE [Me_MuOnline].dbo.MEMB_INFO SET session_token = ?, remember_token = ?, isloggedIn = 1 WHERE memb___id = ?", [
            $sessionToken,
            $rememberToken,
            $username,
        ]);

        // Issue a JWT
        $payload = [
            'username' => $username,
            'session_token' => $sessionToken,
            'authenticated' => true,
        ];

        $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        // Set the remember token cookie if "remember me" is checked
        if ($remember) {
            $cookie = cookie('remember_token', $rememberToken, 525600); // 1 year in minutes
            return response()->json(['message' => 'Login successful', 'jwt' => $jwt, 'authenticated' => true], 200)->withCookie($cookie);
        }

        return response()->json(['message' => 'Login successful', 'jwt' => $jwt, 'authenticated' => true], 200);
    }


    public function create(Request $request)
    {
        // Validate the request data
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'username' => 'required|max:10|unique:Me_MuOnline.dbo.MEMB_INFO,memb___id',
            'email' => 'required|email|unique:Me_MuOnline.dbo.MEMB_INFO,mail_addr',
            'password' => 'required|max:10',
            'genre' => 'required|boolean',
        ]);

        // Create the account
        DB::connection('Me_MuOnline')->beginTransaction();

        try {
            $result = DB::connection('Me_MuOnline')->select("SELECT CHARACTER_MAXIMUM_LENGTH FROM [Me_MuOnline].INFORMATION_SCHEMA.COLUMNS IC WHERE TABLE_NAME = 'MEMB_INFO' AND COLUMN_NAME = 'memb__pwd'");
            $pwdMaxLen = $result[0]->CHARACTER_MAXIMUM_LENGTH;

            $hashedPwd = password_hash($request->password, PASSWORD_DEFAULT);

            DB::connection('Me_MuOnline')->insert("INSERT INTO [Me_MuOnline].dbo.MEMB_INFO (memb___id, memb__pwd, mail_addr, memb_name, sno__numb, bloc_code, ctl1_code, genre) VALUES (?, ?, ?, ?, '1111111111111', 0, 0, ?)", [
                $request->username,
                substr($hashedPwd, 0, $pwdMaxLen),
                $request->email,
                $request->username,
                $request->genre,
            ]);

            DB::connection('Me_MuOnline')->commit();
        } catch (\Exception $e) {
            DB::connection('Me_MuOnline')->rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Account created successfully'], 201);
    }

    public function checkUsername($username)
    {
        // Check if the username exists
        $result = DB::connection('Me_MuOnline')->select("SELECT COUNT(*) as count FROM [Me_MuOnline].dbo.MEMB_INFO WHERE memb___id = ?", [
            $username,
        ]);

        $count = $result[0]->count;

        if ($count > 0) {
            return response()->json(['message' => 'Username already exists'], 400);
        } else {
            return response()->json(['message' => 'Username is available'], 200);
        }


    }

    public function checkEmail($email)
    {
        //Check if the email exists
        $result = DB::connection('Me_MuOnline')->select("SELECT COUNT(*) as count FROM [Me_MuOnline].dbo.MEMB_INFO WHERE mail_addr = ?", [
            $email,
        ]);

        $count = $result[0]->count;

        if ($count > 0) {
            return response()->json(['boolean' => false], 400);
        } else {
            return response()->json(['boolean' => true], 200);
        }
    }

    public function checkAuth(Request $request)
    {
        $sessionToken = $request->session()->get('session_token');
        $rememberToken = $request->cookie('remember_token');

        if (!$sessionToken && !$rememberToken) {
            return response()->json(['authenticated' => false]);
        }

        $user = DB::connection('Me_MuOnline')->selectOne("SELECT * FROM [Me_MuOnline].dbo.MEMB_INFO WHERE remember_token = ?", [
            $rememberToken ?? $sessionToken,
        ]);

        return response()->json(['authenticated' => !!$user]);
    }

    public function logout(Request $request)
    {
        $sessionToken = $request->session()->get('session_token');
        $rememberToken = $request->cookie('remember_token');

        // Clear the session and remember tokens from Laravel's session data and the database
        session()->forget('session_token');
        DB::connection('Me_MuOnline')->update("UPDATE [Me_MuOnline].dbo.MEMB_INFO SET isloggedIn = 0, remember_token = null WHERE remember_token = ?", [
            $rememberToken ?? $sessionToken,
        ]);

        // Clear the remember token cookie from the user's browser
        $cookie = cookie()->forget('remember_token');

        return response()->json(['message' => 'Logout successful'], 200)->withCookie($cookie);
    }

    public function user(Request $request)
    {
        $user = DB::connection('Me_MuOnline')
            ->table('MEMB_INFO')
            ->where('session_token', $request->header('Authorization'))
            ->where('isloggedIn', 1)
            ->select('memb___id as username', 'mail_addr as email')
            ->first();
        return response()->json($user);
    }
}
