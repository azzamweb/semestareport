<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/reports/{id}', [ReportController::class, 'show'])->name('reports.show');
Route::get('/peta-sampah', [ReportController::class, 'petaSampah'])->name('peta.sampah');
Route::get('/users/{id}', [ProfileController::class, 'show'])->name('users.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');

    Route::post('/reports', [ReportController::class, 'store'])->name('reports.store'); 
    Route::patch('/reports/{id}', [ReportController::class, 'update'])->name('reports.update');
    Route::delete('/reports/{id}', [ReportController::class, 'destroy'])->name('reports.destroy');    


});

Route::get('/login', [Auth\AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [Auth\AuthenticatedSessionController::class, 'store']);

Route::get('/register', [Auth\RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [Auth\RegisteredUserController::class, 'store']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
