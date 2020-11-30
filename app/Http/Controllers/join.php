<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\myParties;
use App\models\repliki;
use App\models\imprezy;
use DB;

class join extends Controller
{
    public function joinPartyForm($id)
    {
        $party = imprezy::find($id);
        $guns_taken = myParties::where('Id_imprezy', '=', $id)->get();
        $available_gun = repliki::all();
        return view('join', ['party' => $party, 'available_gun' => $available_gun, 'guns_taken' => $guns_taken]);
    }

    public function joinParty(Request $request)
    {
        $add_me_to_party = new myParties;
        $add_me_to_party->name = $request->input('name');
        $add_me_to_party->last_name = $request->input('last_name');
        $add_me_to_party->birth_date = $request->input('birth_date');
        $add_me_to_party->Id_imprezy = $request->input('Id_imprezy');
        $add_me_to_party->used_gun = $request->input('gun');
        $add_me_to_party->save();
        return redirect()->action('App\Http\Controllers\Partys@shoots');
    }
}
