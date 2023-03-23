<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PublicWebsiteController extends Controller
{
    //Here you can see how many accounts were created in total.
    public function count()
    {
        $count = DB::connection('Me_MuOnline')->table('MEMB_INFO')->count();
        return response()->json(['count' => $count]);
    }

    //Show TOP 10 Characters
    public function top10() {
        //
        $top10 = DB::connection('MuOnline')
                                            ->table('Character')
                                            ->join('Me_MuOnline.dbo.MEMB_STAT', 'Character.AccountID', '=', 'Me_MuOnline.dbo.MEMB_STAT.memb___id')
                                            ->select('Character.Name', 'Character.cLevel', 'Character.Class', 'Character.mLevel', 'Character.Strength', 'Character.Dexterity', 'Character.Vitality', 'Character.Energy', 'Character.LDate', 'Me_MuOnline.dbo.MEMB_STAT.ConnectStat')
                                            ->orderBy('Character.cLevel', 'desc')
                                            ->limit(10)
                                            ->get();
                                return response()->json($top10);
    }
}
