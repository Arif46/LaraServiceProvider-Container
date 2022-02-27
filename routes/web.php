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
    return view('welcome');
    // dd(app());
});

// provide get formula
Route::get('/test-provider', function () {
    app()->make('first_service_provider');
});

// container
Route::get('/test-container', function () {
    return view('container.container');
});

Route::get('/test-Facade', function () {
    ArifTestFacade::test();
});
