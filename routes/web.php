<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashBoardController::class, 'index'])->name('dashboard.index');
    });

    Route::prefix('/profile')->group(function () {
        Route::get('/index', [ProfileController::class, 'index'])->name('profile.index');
    });

    Route::prefix('/attendance')->group(function () {
        Route::get('/index', [DashBoardController::class, 'index'])->name('attendance.index');
    });

    Route::prefix('/training')->group(function () {
        Route::get('/index', [DashBoardController::class, 'index'])->name('training.index');
    });

    Route::prefix('/activity')->group(function () {
        Route::get('/index', [DashBoardController::class, 'index'])->name('activity.index');
    });

    Route::prefix('/accident')->group(function () {
        Route::get('/index', [DashBoardController::class, 'index'])->name('accident.index');
    });

    Route::prefix('/webboard')->group(function () {
        Route::get('/index', [DashBoardController::class, 'index'])->name('webboard.index');
    });

    Route::prefix('/administrator')->group(function () {
        Route::get('/index', [DashBoardController::class, 'index'])->name('admin.setting.index');
    });
});

require __DIR__ . '/auth.php';
