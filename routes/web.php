<?php

use App\Http\Controllers\PostController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/blogs', function () {
        return view('blogs');
    })->name('blogs');

    Route::get('/myblogs', function () {
        return view('myblogs');
    })->name('myblogs');

    Route::get('/addpost', function () {
        return view('postCreate');
    })->name('addpost');

    Route::post('/addpost',[PostController::class,'CreatePost'])->name('store.post');
});
