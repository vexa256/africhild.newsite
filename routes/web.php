<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecondaryFrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
Route::controller(AboutController::class)->group(function () {

    Route::get('AfriChildPartners', 'AfriChildPartners')->name('AfriChildPartners');

    Route::get('AfriChildTeam', 'AfriChildTeam')->name('AfriChildTeam');

    Route::get('AfriChildFounders', 'AfriChildFounders')->name('AfriChildFounders');

    Route::get('AfriChildDirectors', 'AfriChildDirectors')->name('AfriChildDirectors');

    Route::get('AfriChildGallery', 'AfriChildGallery')->name('AfriChildGallery');
});

Route::controller(SecondaryFrontController::class)->group(function () {

    Route::get('AfriChildOurWork', 'AfriChildOurWork')
        ->name('AfriChildOurWork');

});

Route::controller(BlogController::class)->group(function () {
    Route::get('/AfriChildBlogDetails/{slug}', 'AfriChildBlogDetails')
        ->name('AfriChildBlogDetails');

    Route::get('/search', 'AfriChildBlogsearch')->name('AfriChildBlogsearch');

    Route::get('/AfriChildBlog', 'AfriChildBlog')->name('AfriChildBlog');

});
Route::controller(AppController::class)->group(function () {

    Route::get('/', 'AfriChildHome')->name('home');
    Route::get('/dashboard', 'AfriChildHome')->name('dashboard');
    Route::get('/AfriChildHome', 'AfriChildHome')->name('AfriChildHome');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();
});