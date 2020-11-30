<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\news;

class home extends Controller
{
    public function index_page()
    {
        $current_date = date('Y-m-d');
        $newsy = news::where('Data', '<=', $current_date)->limit(4)->get();
        return view('main', ['newsy' => $newsy]);
    }
}
