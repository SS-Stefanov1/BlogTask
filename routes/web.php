<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

// Blog Page
#Route::get('/blog_main', function () {return view('welcome');});
Route::get('/blog', [\App\Http\Controllers\PostsController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\PostsController::class, 'show']);

// Create New Blogs
Route::get('/blog/create/post', [\App\Http\Controllers\PostsController::class, 'create']);
Route::post('/blog/create/post', [\App\Http\Controllers\PostsController::class, 'store']);

// Edit Blogs
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\PostsController::class, 'edit']);
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\PostsController::class, 'update']);

// Remove Blogs
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\PostsController::class, 'destroy']);

// Register
Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

// Session
Route::get('/login', 'App\Http\Controllers\SessionsController@create');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');

// Additional Info Pages
Route::get('/team', [App\Http\Controllers\InfoController::class, 'team']);
Route::get('/hq', [App\Http\Controllers\InfoController::class, 'hq']);
Route::get('/about', [App\Http\Controllers\InfoController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\InfoController::class, 'contact']);
