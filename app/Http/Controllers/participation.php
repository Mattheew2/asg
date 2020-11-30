<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\myParties;
use App\models\imprezy;
use App\models\repliki;
use DB;

class participation extends Controller
{
    public function my_parties()
    {
        $my_parties = myParties::where('User_id', 1)->orderBy('id_imprezy')->get();
        $all_guns = repliki::all();
        $all_parties = imprezy::all();



        return view(
            'my_parties',
            ['my_partii' => $my_parties],
            ['all_parties' => $all_parties, 'all_guns' => $all_guns]
        );
    }
}
