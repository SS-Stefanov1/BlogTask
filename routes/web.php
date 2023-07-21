<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

#Route::resource('/blog', PostsController::class);

Route::get('/', [PagesController::class, 'index']);

Route::get('/blog', [\App\Http\Controllers\PostsController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\PostsController::class, 'show']);

Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

Route::get('/login', 'App\Http\Controllers\SessionsController@create');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');
