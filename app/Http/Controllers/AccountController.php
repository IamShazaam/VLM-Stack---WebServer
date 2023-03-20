<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Query the database to check if the user exists
        $user = DB::connection('Me_MuOnline')->selectOne("SELECT * FROM [Me_MuOnline].dbo.MEMB_INFO WHERE memb___id = ?", [
            $username,
        ]);

        // dd($user);
    
        if (!$user) {
            return response()->json(['message' => 'Invalid username'], 401);
        }
    
        // Verify the password hash
        if (password_verify($password, $user->memb__pwd)) {
            return response()->json(['message' => 'Invalid password'], 401);
        }
        // TODO: Add additional login logic if needed
    
        return response()->json(['message' => 'Login successful'], 200);
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
}
