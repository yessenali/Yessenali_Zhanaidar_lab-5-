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
});

Route::get('/test', function () {
    return view('web programming: back end');
});

Route::get('/route-example', function () {
    return "web programming: back end" ;
});


Route::get('/post/{id}/{age?} ', function ($id, $age=18) {
    return "Your id is: ".$id." Your age is: ".$age;
});