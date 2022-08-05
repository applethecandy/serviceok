<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\WorkController;

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

Route::get('/', HomeController::class)->name('index');

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('{id}', [PostController::class, 'show'])->name('post.show');
});

Route::get('impresum', [StaticPageController::class, 'impresum'])->name('impresum');

Route::prefix('quiz')->group(function () {
    Route::get('/', [WorkController::class, 'create'])->name('work.create');
    Route::put('store', [WorkController::class, 'store'])->name('work.store');
});

Route::prefix('become-master')->group(function () {
    Route::get('/', [MasterController::class, 'create'])->name('master.create');
    Route::put('store', [MasterController::class, 'store'])->name('master.store');
});
