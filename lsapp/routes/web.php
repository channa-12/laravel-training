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

// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>Hello world</h1>';
// });

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/users/{id}/{name}', function($name, $id){
    return 'This is user ' .$name. ' with an id of ' .$id;
});




