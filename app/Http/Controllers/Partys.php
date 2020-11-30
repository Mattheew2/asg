<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\imprezy;
use DB;
use Illuminate\Support\Facades\Auth;

class Partys extends Controller
{

    public function shoots()
    {
        $parties = imprezy::all()->sortByDesc('Data');
        return view('partys', ['parties' => $parties]);
    }

    public function single_shoots($id)
    {
        $single_party = imprezy::find($id);
        return view('single_party', ['party' => $single_party]);
    }
    public function add_party_form()
    {

        return view('add_party_form');
    }
    public function add_party(Request $request)
    {
        $add_me_to_party = new imprezy;
        $add_me_to_party->Miejsce = $request->input('place');
        $add_me_to_party->Data = $request->input('data');
        $add_me_to_party->Charakter = $request->input('charakter');
        $add_me_to_party->save();
        return redirect()->action('App\Http\Controllers\Partys@shoots');
    }
    public function cancel_party($id)
    {
        DB::table('imprezy')->where('id', '=', $id)->delete();
        return redirect()->action('App\Http\Controllers\Partys@shoots');
    }
    public function edit_party_form($id)
    {
        $single_party = imprezy::find($id);
        return view('edit_party_form', ['party' => $single_party]);
    }
    public function edit_party(Request $request)
    {
        $add_me_to_party = imprezy::find($request->input('id'));
        $add_me_to_party->Miejsce = $request->input('place');
        $add_me_to_party->Data = $request->input('data');
        $add_me_to_party->Charakter = $request->input('charakter');
        $add_me_to_party->save();
        return redirect()->action('App\Http\Controllers\Partys@shoots');
    }
}
