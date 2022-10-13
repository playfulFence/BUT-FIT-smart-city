<?php

use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
});

//Route::get('/info', 'App\\Http\\Controllers\\Test@index');
Route::get('/index', [Test::class, 'index'])->name("index");
Route::post('/register', [Test::class, 'register'])->name("register");

