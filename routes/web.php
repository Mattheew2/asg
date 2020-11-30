<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUser;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

//Guest

Route::get('/', 'App\Http\Controllers\home@index_page');

Route::get('/imprezy', 'App\Http\Controllers\Partys@shoots');

Route::get('/imprezy/{id}', 'App\Http\Controllers\Partys@single_shoots');

Route::post('/imprezy/join-party/', 'App\Http\Controllers\join@joinParty');

Route::get('/imprezy/join-party/{id}', 'App\Http\Controllers\join@joinPartyForm');

Route::get('/repliki', 'App\Http\Controllers\Weapons@replicas');

Route::get('/repliki/{id}', 'App\Http\Controllers\Weapons@replica_single');

Route::post('/add-party', 'App\Http\Controllers\Partys@add_party')->middleware('auth', 'user_type');

Route::get('/add-party', 'App\Http\Controllers\Partys@add_party_form')->middleware('auth', 'user_type');

Route::get('/delete-party/{id}', 'App\Http\Controllers\Partys@cancel_party')->middleware('auth', 'user_type');

Route::post('/edit-party', 'App\Http\Controllers\Partys@edit_party')->middleware('auth', 'user_type');

Route::get('/edit-party/{id}', 'App\Http\Controllers\Partys@edit_party_form')->middleware('auth', 'user_type');

Route::post('/repliki/add/', 'App\Http\Controllers\Weapons@add_to_base')->middleware('auth', 'user_type');

Route::get('/repliki/add/', 'App\Http\Controllers\Weapons@add_replika')->middleware('auth', 'user_type');

Route::get('/home/users/', 'App\Http\Controllers\non_admin_users@show_all')->middleware('auth', 'user_type');

Route::get('/moje-imprezy', 'App\Http\Controllers\participation@my_parties')->middleware('auth');

Route::get('/news', 'App\Http\Controllers\all_news@show_news');

Route::get('/news/{id}', 'App\Http\Controllers\all_news@show_single_news');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
