<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{
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

            $hashedPwd = hash('sha256', $request->password);

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

    // public function checkUsername1(Request $request)
    // {
    //     // Get the username from the query string
    //     $username = $request->query('username');

    //     // Check if the username exists
    //     $result = DB::connection('Me_MuOnline')->select("SELECT COUNT(*) as count FROM [Me_MuOnline].dbo.MEMB_INFO WHERE memb___id = ?", [
    //         $username,
    //     ]);

    //     $count = $result[0]->count;

    //     if ($count > 0) {
    //         return response()->json(['message' => 'Username already exists'], 400);
    //     }

    //     return response()->json(['message' => 'Username is available'], 200);
    // }
    // public function checkUsername(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'username' => 'required|max:10',
    //     ]);

    //     // Check if the username exists
    //     $result = DB::connection('Me_MuOnline')->select("SELECT COUNT(*) as count FROM [Me_MuOnline].dbo.MEMB_INFO WHERE memb___id = ?", [
    //         $request->username,
    //     ]);

    //     $count = $result[0]->count;

    //     if ($count > 0) {
    //         return response()->json(['message' => 'Username already exists'], 400);
    //     }

    //     return response()->json(['message' => 'Username is available'], 200);
    // }

}
