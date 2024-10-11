<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/categories', CategoryController::class)
    ->only(['index']);

Route::resource('/products', ProductController::class)
    ->only(['index']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::middleware('auth')->group(function () {
Route::resource('/states', StateController::class);
//    ->only(['index', 'show', 'create', 'store', 'edit', 'update']);
//    ->except(['delete']);

//});

Route::resource('/countries', CountryController::class)//    ->only(['index',]);
;

require __DIR__ . '/auth.php';
