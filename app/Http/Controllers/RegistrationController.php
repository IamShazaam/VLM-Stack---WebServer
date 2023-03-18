<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\MembInfo;
use App\Models\Character;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'memb___id' => 'required|unique:Me_MuOnline.MEMB_INFO,memb___id',
            'memb__pwd' => 'required|min:6',
            'memb_guid' => 'required',
            'sno__numb' => 'required',
            'mail_addr' => 'required|email|unique:Me_MuOnline.MEMB_INFO,mail_addr',
            'character_name' => 'required|unique:MuOnline.Character,Name'
        ]);


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        try {
            DB::connection('Me_MuOnline')->transaction(function () use ($request) {
                $membInfo = new MembInfo([
                    'memb___id' => $request->memb___id,
                    'memb__pwd' => $request->memb__pwd,
                    'memb_guid' => $request->memb_guid,
                    'sno__numb' => $request->sno__numb,
                    'mail_addr' => $request->mail_addr,
                    'bloc_code' => 0,
                    'ctl1_code' => 0,
                ]);

                $membInfo->save();

                $character = new Character([
                    'AccountID' => $membInfo->memb___id,
                    'Name' => $request->character_name,
                    // Other character fields can be added here
                ]);

                $character->save();
            });

            return response()->json([
                'success' => true,
                'message' => 'Registration successful'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during registration',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
