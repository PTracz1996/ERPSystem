<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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
//Route::post('client/create', [App\Http\Controllers\ClientsController::class, 'create'])->name('client.create');

Route::get('/Create', function () {
    return view('createClient');
});

Route::get('/Show', function () {
    return view('showClient');
});

Route::get('/Edit', function () {
    return view('editClient');
});

Route::resource('client', ClientController::class);