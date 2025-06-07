<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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