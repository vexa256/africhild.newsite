<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
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

Route::controller(FrontController::class)->group(function () {

    Route::get('/AfriChildBoardOfDirectors', 'AfriChildBoardOfDirectors')->name('AfriChildBoardOfDirectors');
    Route::get('/AfriChildSecretariat', 'AfriChildSecretariat')->name('AfriChildSecretariat');
    Route::get('/AfriChildOurWork', 'AfriChildOurWork')->name('AfriChildOurWork');
    Route::get('/AfriChildFounders', 'AfriChildFounders')->name('AfriChildFounders');
    Route::get('/AfriChildPromotingPartners', 'AfriChildPromotingPartners')->name('AfriChildPromotingPartners');
    Route::get('/AfriChildCorePrograms', 'AfriChildCorePrograms')->name('AfriChildCorePrograms');
    Route::get('/AfriChildGallery', 'AfriChildGallery')->name('AfriChildGallery');
    Route::get('/AfriChildContactUs', 'AfriChildContactUs')->name('AfriChildContactUs');

    Route::get('/', 'AfriChildHome')->name('AfriChildHome');
    Route::get('/dashboard', 'AfriChildHome')->name('dashboard');
    Route::get('/AfriChildHome', 'AfriChildHome')->name('AfriChildHome');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
