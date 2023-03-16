<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class databaseTestController extends Controller
{
    //
    public function testConnection()
{
    $connections = ['Me_MuOnline', 'MuOnline', 'Ranking', 'Events', 'BattleCore'];
    $results = [];

    foreach ($connections as $connection) {
        try {
            DB::connection($connection)->getPdo();
            $results[$connection] = 'Connected';
        } catch (\Exception $e) {
            $results[$connection] = 'Failed: ' . $e->getMessage();
        }
    }

    return response()->json($results);
}
}
