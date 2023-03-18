<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DummyDataController extends Controller
{
    public function createAccounts()
    {
        $accounts = [];

        for ($i = 1; $i <= 50; $i++) {
            $username = 'user' . $i;
            $password = Str::random(10);

            DB::connection('Me_MuOnline')->beginTransaction();

            try {
                $result = DB::connection('Me_MuOnline')->select("SELECT CHARACTER_MAXIMUM_LENGTH FROM [Me_MuOnline].INFORMATION_SCHEMA.COLUMNS IC WHERE TABLE_NAME = 'MEMB_INFO' AND COLUMN_NAME = 'memb__pwd'");
                $pwdMaxLen = $result[0]->CHARACTER_MAXIMUM_LENGTH;

                $hashedPwd = hash('sha256', $password);

                DB::connection('Me_MuOnline')->insert("INSERT INTO [Me_MuOnline].dbo.MEMB_INFO (memb___id, memb__pwd, memb_name, sno__numb, bloc_code, ctl1_code) VALUES (?, ?, ?, '1111111111111', 0, 0)", [
                    $username,
                    substr($hashedPwd, 0, $pwdMaxLen),
                    $username,
                ]);

                DB::connection('Me_MuOnline')->commit();

                $accounts[] = [
                    'username' => $username,
                    'password' => $password,
                ];
            } catch (\Exception $e) {
                DB::connection('Me_MuOnline')->rollback();
                return response()->json(['error' => 'Failed to create accounts: ' . $e->getMessage()], 500);
            }
        }

        return response()->json(['message' => '50 accounts created successfully', 'accounts' => $accounts], 201);
    }
}
