<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('_backend.index');
})->middleware(['auth', 'verified'])->name('backend.index');


Route::get('/dashboard/profile', function () {
    return 'todo profile';
})->middleware(['auth', 'verified'])->name('backend.profile');


Route::get('/dashboard/password', function () {
    return 'todo password';
})->middleware(['auth', 'verified'])->name('backend.password');


Route::get('/dashboard/logout', function () {
    return 'todo logout';
})->middleware(['auth', 'verified'])->name('backend.logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
