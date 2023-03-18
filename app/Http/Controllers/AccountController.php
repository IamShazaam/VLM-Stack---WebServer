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
            'username' => 'required|max:10|unique:Me_MuOnline.dbo.MEMB_INFO,memb___id',
            'password' => 'required|max:20',
        ]);

        // Create the account
        DB::connection('Me_MuOnline')->beginTransaction();

        try {
            $result = DB::connection('Me_MuOnline')->select("SELECT CHARACTER_MAXIMUM_LENGTH FROM [Me_MuOnline].INFORMATION_SCHEMA.COLUMNS IC WHERE TABLE_NAME = 'MEMB_INFO' AND COLUMN_NAME = 'memb__pwd'");
            $pwdMaxLen = $result[0]->CHARACTER_MAXIMUM_LENGTH;

            $hashedPwd = hash('sha256', $request->password);

            DB::connection('Me_MuOnline')->insert("INSERT INTO [Me_MuOnline].dbo.MEMB_INFO (memb___id, memb__pwd, memb_name, sno__numb, bloc_code, ctl1_code) VALUES (?, ?, ?, '1111111111111', 0, 0)", [
                $request->username,
                substr($hashedPwd, 0, $pwdMaxLen),
                $request->username,
            ]);

            DB::connection('Me_MuOnline')->commit();
        } catch (\Exception $e) {
            DB::connection('Me_MuOnline')->rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Account created successfully'], 201);
    }

}
