<?php

use Facades\App\Services\ApiService;

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
    return view('welcome');
});

Route::get('/api', function () {
    ApiService::list();
});

Route::post('/receive', 'MeuController@receive');

Route::get('/users/{user}/edit', 'UsersController@edit');

/*Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {
    Route::get('/', function () {
        return 'Welcome to admin...';
    })->name('admin');
});

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::name('admin')
          ->get('/', function () {
              return 'Welcome to admin...';
          });
    });
*/
