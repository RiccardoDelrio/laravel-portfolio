<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\ProjectController;
use App\Models\Project;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.index');
})->middleware('auth');

Route::get('/dashboard', function () {
    return redirect()->route('admin.index');
})->middleware('auth')->name('dashboard');

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

Route::resource('projects', ProjectController::class)
    ->middleware('auth');
Route::resource('categories', CategoryController::class)
    ->middleware('auth');

require __DIR__ . '/auth.php';
