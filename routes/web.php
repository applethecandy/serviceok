<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
    return view('pages.index');
})->name('index');

Route::prefix('posts')->group(function () {
    Route::get('/1', function () {
        return view('pages.article');
    })->name('post.show');

    Route::get('/', function () {
        return view('pages.blog');
    })->name('post.index');
});

Route::get('/impresum', function () {
    return view('pages.impresum');
})->name('impresum');

Route::get('/become_master', function () {
    return view('pages.become_master');
})->name('become_master');

Route::get('/quiz', function () {
    return view('pages.questions');
})->name('questions');