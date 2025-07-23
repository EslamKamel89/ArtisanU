<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfNotAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', function () {

            return view('admin.dashboard');
        })->name('dashboard');
    });
});
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
