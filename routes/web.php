<?php

use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/',[IndexController::class,'index'])->name('home');
Route::get('/rent-buy',[IndexController::class,'rentBuy'])->name('rent-buy');
Route::get('/share-accommodation',[IndexController::class,'shareAccomodation'])->name('share-accommodation');
Route::get('/detail/{id}',[IndexController::class,'detailView'])->name('detail');
Route::get('/general-conditions',[IndexController::class,'generalConditions']);
Route::get('/privacy',[IndexController::class,'privacy']);
Route::get('/legal',[IndexController::class,'legal']);
Route::middleware([AuthCheck::class])->group(function(){


Route::get('/add-post',[IndexController::class,'addPost'])->name('add-post');
Route::get('/add-request',[IndexController::class,'addRequest'])->name('add-request');
Route::get('/dashboard',[IndexController::class,'dashboard'])->name('dashboard');
Route::get('/post-delete/{id}',[IndexController::class,'postDelete']);
Route::get('/request-delete/{id}',[IndexController::class,'requestDelete']);
});
// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/save-post', [IndexController::class, 'savePost'])->name('savePost');
Route::post('/save-request', [IndexController::class, 'saveRequest'])->name('saveRequest');
Route::post('/send-otp', [PasswordResetLinkController::class, 'sendOtp'])->name('password.email');
Route::post('/verify-otp', [PasswordResetLinkController::class, 'verifyOtp'])->name('password.reset');

Route::get('/api/filter-requests', [IndexController::class, 'filterRequests']);
Route::get('/api/filter-posts', [IndexController::class, 'filterPosts']);

require __DIR__.'/auth.php';
