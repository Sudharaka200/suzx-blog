<?php

use App\Http\Controllers\PostController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//nVigation URL
Route::get('/', function() {
    return view('frontend.Home');
});

Route::get('/singleblog', function() {
    return view('frontend.SingleBlog');
});

Route::get('/admin', function() {
    return view('frontend.admin.admin');
});

Route::get('/dashboard', function() {
    return view('frontend.admin.dashboard');
});

Route::get('/addpost', function() {
    return view('frontend.admin.addpost');
});

Route::get('/login',  function(){
    return view('frontend.admin.dashboard');
});

Route::get('/addNewPost', function(){
    return view('frontend.admin.addpost');
});

//create a blog url
Route::post('post/store', [PostController::class, 'store'])->name('post.store');