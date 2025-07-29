<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\StudentDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectIfNotAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::group([
    'middleware' => ['auth', 'check_role:student'],
    'prefix' => '/student',
    'as' => 'student.'
], function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
});

Route::group([
    'middleware' => ['auth', 'check_role:instructor'],
    'prefix' => '/instructor',
    'as' => 'instructor.'
], function () {
    Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin_auth.php';
require __DIR__ . '/admin.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
