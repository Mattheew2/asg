<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\repliki;

class Weapons extends Controller
{
    public function replicas()
    {
        $weapons = repliki::all();
        return view('weapons', ['weapons' => $weapons]);
    }

    public function replica_single($id)
    {
        $weapons = repliki::find($id);
        return view('single_replika', ['weapons' => $weapons]);
    }

    public function add_replika()
    {
        return view('add_new_replika');
    }
    public function add_to_base(Request $request)
    {
        $add = new repliki;
        $add->Model_oryginalny = $request->input('model_oryginalny');
        $add->Producent = $request->input('Producent');
        $add->Moc = $request->input('Moc');
        $add->Kolor = $request->input('Kolor');
        $add->save();
        return redirect()->action('App\Http\Controllers\Weapons@replicas');
    }
}
