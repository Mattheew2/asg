<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class non_admin_users extends Controller
{
    public function show_all()
    {
        $users = User::where('type', '<>', 'admin')->get();
        return view('users', ['all_users' => $users]);
    }

    public function add_user()
    {
    }

    public function delete_user()
    {
    }
}
