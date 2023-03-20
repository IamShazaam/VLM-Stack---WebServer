<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckUsernameController extends Controller
{
    public function checkUsername($username)
    {
        // Check if the username exists
        $result = DB::connection('Me_MuOnline')->select("SELECT COUNT(*) as count FROM [Me_MuOnline].dbo.MEMB_INFO WHERE memb___id = ?", [
            $username,
        ]);

        $count = $result[0]->count;

        if ($count > 0) {
            return response()->json(['message' => 'Username already exists'], 400);
        }

        return response()->json(['message' => 'Username is available'], 200);
    }
}