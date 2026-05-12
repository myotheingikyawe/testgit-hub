<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\PhotoController;
//use App\Http\Controllers\ContactController;
//use App\Http\Controllers\AboutController;
//route->composer->
//Route::get('/', [HomeController::class, 'testroot'])->name('root');
//Route::get('post')
//Route::post('post')
//Route::get('post/{id}')
//Route::get('post/{id}/edit')
//Route::put('post/{id}/')
//Route::delete('post/{id}/')
//Route::get('/', function () {
  // return redirect('/posts');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::resource('posts', HomeController::class);

    Route::get('logout', [AuthController::class, 'logout']);

});
