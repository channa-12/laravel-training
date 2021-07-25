<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

/*
Route::get('/hello', function () {
    return 'Hello World';
    return '<h1> Hello World <h1>'
});

Route::get('/users/{id}/{name}', function($name, $id) {
    return 'This is user ' .$name. ' with an id of ' .$id;
});

// route directly to view 
Route::get('/', function () {
    return view('welcome');
});

// route to our controller and controller return view
Route::get('/', [PagesController::clas, 'index']);
*/

//@index is a method name in Controllers -> PagesController.php
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

// create all the route for the funtion in PostsController
Route::resource('posts', PostsController::class);
// or this one for route resource
// Route::resources(['posts' => PostsController::class]);


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
