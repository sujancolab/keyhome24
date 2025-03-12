<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\LanguageSwitcher;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [IndexController::class, 'index'])->middleware([LanguageSwitcher::class])->name('home');
Route::get('/rent-buy', [IndexController::class, 'rentBuy'])->middleware([LanguageSwitcher::class])->name('rent-buy');
Route::get('/share-accommodation', [IndexController::class, 'shareAccomodation'])->name('share-accommodation');
Route::get('/detail/{id}', [IndexController::class, 'detailView'])->middleware([LanguageSwitcher::class])->name('detail');
Route::get('/general-conditions', [IndexController::class, 'generalConditions']);
Route::get('/privacy', [IndexController::class, 'privacy']);
Route::get('/legal', [IndexController::class, 'legal']);
Route::middleware([AuthCheck::class])->group(function () {
    Route::get('/add-post', [IndexController::class, 'addPost'])->middleware([LanguageSwitcher::class])->name('add-post');
    Route::get('/add-request', [IndexController::class, 'addRequest'])->middleware([LanguageSwitcher::class])->name('add-request');
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->middleware([LanguageSwitcher::class])->name('dashboard');
    Route::get('/post-delete/{id}', [IndexController::class, 'postDelete']);
    Route::get('/request-delete/{id}', [IndexController::class, 'requestDelete']);
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

//admin
Route::prefix('/admin')->group(function(){
    Route::get('/login',[AdminController::class,'login'])->name('admin.login');
    Route::post('/login',[AdminController::class,'loginPost'])->name('admin.login.post');
    Route::middleware([AdminAuthCheck::class])->group(function(){
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('/posts',[AdminController::class,'posts'])->name('admin.posts');
        Route::get('/requests',[AdminController::class,'requests'])->name('admin.requests');
        Route::get('/users',[AdminController::class,'users'])->name('admin.users');
    });


});


// Route::middleware(['lang'])->group(function () {
//     Route::get('/', [IndexController::class, 'index'])->name('home');
//     Route::get('/rent-buy', [IndexController::class, 'rentBuy'])->name('rent-buy');
//     Route::get('/share-accommodation', [IndexController::class, 'shareAccomodation'])->name('share-accommodation');
//     Route::get('/detail/{id}', [IndexController::class, 'detailView'])->name('detail');
//     Route::get('/add-post', [IndexController::class, 'addPost'])->name('add-post');
//     Route::get('/add-request', [IndexController::class, 'addRequest'])->name('add-request');
//     Route::post('/save-post', [IndexController::class, 'savePost'])->name('savePost');
//     Route::post('/save-request', [IndexController::class, 'saveRequest'])->name('saveRequest');
// });



require __DIR__ . '/auth.php';
