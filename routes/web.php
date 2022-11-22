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
    Route::get('/profile/edit', 'EditController')->name("edit");
    Route::get('/profile/citymanager', 'CityManagerController')->name("cityman");
    Route::post('/profile/edit', 'UpdatePasswordController')->name("update.password");
    Route::post('/profile', 'UpdateController')->name("update");
});

Route::name('citymanager.')
    ->namespace('App\Http\Controllers\Citymanager')
    ->middleware('auth')
    ->group(function () {
        Route::get('/citymanager/new_tickets_list', 'ViewTicketListController')->name("new_tickets_list");
        Route::get('/citymanager/ticket/{ticket}', 'ShowToCMController')->name("ticket_detailed");
        Route::get('/citymanager/problems', 'ViewProblemsController')->name('problems');
        Route::get('/citymanager/technicians', 'ViewTechniciansController')->name('techs');
        Route::get('/citymanager/technicians/applies', 'ViewTechniciansAppliesController')
            ->name('new_techs');
        Route::get('/citymanager/technicians/applies/{tech}','AcceptTechApplicantController')
            ->name('accept_tech');
    });

Route::name('problem.')
    ->namespace('App\Http\Controllers\Problems')
    ->middleware('auth')
    ->group(function () {
        Route::get('/problems/create', 'CreateController')->name("createProb");
        Route::post('/problems/create', 'StoreController')->name("storeProb");
});


Route::name('join.')
    ->namespace('App\Http\Controllers\Join')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile/join', 'CreateController')->name("create");
        Route::post('/profile/join', 'StoreController')->name("store");
    });




Route::name('user.tickets.')
    ->namespace('App\Http\Controllers\Tickets\User')
    ->middleware('auth')
    ->group(function () {
        Route::get('user/tickets', 'IndexController')->name("index");
        Route::get('user/tickets/old', 'IndexOldController')->name("index.old");
        Route::get('user/tickets/create', 'CreateController')->name("create");
        Route::post('user/tickets', 'StoreController')->name("store");
        Route::post('user/tickets/{ticket}', 'AddCommentController')->name("add.comment");
        Route::get('user/tickets/image/{ticket}', 'ShowImagesController')->name("show.images");
        Route::post('user/tickets/image/{ticket}', 'AddImageController')->name("add.images");
        Route::get('user/tickets/{ticket}', 'ShowController')->name("show");
    });
