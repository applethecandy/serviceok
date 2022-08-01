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

Route::get('/1', function () {
    return view('pages.index');
});
Route::get('/2', function () {
    return view('pages.article');
});
Route::get('/3', function () {
    return view('pages.blog');
});
Route::get('/4', function () {
    return view('pages.impresum');
});
Route::get('/5', function () {
    return view('pages.become_master');
});
Route::get('/6', function () {
    return view('pages.questions');
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});