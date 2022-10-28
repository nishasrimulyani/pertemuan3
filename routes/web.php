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

// Route::get('/nisha', function () {
//     return 'Hello World';
// });

// Route::get('/nisha2', function () {
//     return 'Hallo Nisha';
// });

// Route::redirect('/nisha', 'nisha2');

// Route::get('/greeting', function () {
//     return view('greeting');
// });

// Route::redirect('/nisha2', 'greeting');

Route::get('/user/{id}', function ($id) {
    return "User ".$id;
});
