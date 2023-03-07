<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
        $posts = Post::all();
        return view('blogs',compact('posts'));
    })->name('blogs');

    Route::get('/myblogs/{userId}', function ($userId) {
        $myPosts = Post::where('user_id',$userId)->get();
        return view('myblogs',compact('myPosts'));
    })->name('myblogs');

    Route::get('/addpostpage', function () {
        return view('postCreate');
    })->name('addpostpage');
    
    Route::post('/addpost',[PostController::class,'CreatePost'])->name('store.post');

    Route::get('/updatepostpage/{keyid}',[PostController::class,'UpdatePage'])->name('updatePostPage');
    Route::post('/updatepost/{id}',[PostController::class,'UpdateData'])->name('update.post');
    Route::delete('/deletepost/{id}',[PostController::class,'DeletePost'])->name('delete.post');
    Route::get('/blogdetailpage/{id}', function ($id) {
        $post = Post::find($id);
        return view('viewPost',compact('post'));
    })->name('detailPage');
});
