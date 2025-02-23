<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/',[IndexController::class,'index'])->name('home');
Route::get('/rent-buy',[IndexController::class,'rentBuy'])->name('rent-buy');
Route::get('/share-accommodation',[IndexController::class,'shareAccomodation'])->name('share-accommodation');
Route::get('/detail',[IndexController::class,'detailView'])->name('detail');
Route::get('/add-post',[IndexController::class,'addPost'])->name('add-post');
Route::get('/dashboard',[IndexController::class,'dashboard'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/save-post', [IndexController::class, 'savePost'])->name('savePost');

require __DIR__.'/auth.php';
