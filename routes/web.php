<?php

use Illuminate\Support\Facades\Route;

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
    return view('register_form');
})->name('home');
//Route::post('//submit', [\App\Http\Controllers\UsersController::class, 'index'])->name('send-message');

Route::controller(\App\Http\Controllers\UsersController::class)->group(function () {

    Route::post('//submit', 'index')->name('send.message');

});
