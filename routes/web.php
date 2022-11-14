<?php

//use App\Http\Controllers\Test;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Registration as Registration;
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
    return phpinfo();
})->name("hello");

Route::name('registration.')
    ->namespace('App\Http\Controllers\Registration')
    ->middleware('auth.is')
    ->group(function () {
    Route::get('/registration', 'CreateController')->name("create");
    Route::post('/registration', 'StoreController')->name("store");
});

Route::name('authentication.')
    ->namespace('App\Http\Controllers\Authentication')
    ->middleware('auth.is')
    ->group(function () {
    Route::get('/login', 'IndexController')->name("index");
    Route::post('/login', 'CheckController')->name("check");
    Route::get('/logout', 'LogoutController')->name("exit")->withoutMiddleware('auth.is');
});

Route::name('profile.')
    ->namespace('App\Http\Controllers\Profile')
    ->middleware('auth')
    ->group(function () {
    Route::get('/profile', 'IndexController')->name("index");
});

