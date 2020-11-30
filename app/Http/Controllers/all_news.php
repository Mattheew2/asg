<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\news;

class all_news extends Controller
{
    public function show_news()
    {
        $every_news = news::all();
        return view('news', ['every_news' => $every_news]);
    }

    public function show_single_news($id)
    {
        $single_news = news::find($id);

        $last_news = news::where('id', '<>', $id)->orderByDesc('data')->limit(4)->get();

        return view('single_news', ['last_news' => $last_news, 'single_news' => $single_news]);
    }

    public function add_news()
    {
        # code...
    }
    public function edit_news()
    {
        # code...
    }
    public function delete_news()
    {
        # code...
    }
}
