<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')
    ->name("admin.")
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('index');
    });

require __DIR__ . '/auth.php';
