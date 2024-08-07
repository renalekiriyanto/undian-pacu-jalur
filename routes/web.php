<?php

use App\Http\Controllers\ArenaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\HomeController;
use App\Livewire\Daerah\Create as DaerahCreate;
use App\Livewire\Daerah\Index as DaerahIndex;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::prefix('daerah')->group(function () {
    Route::get('/', [DaerahController::class, 'index'])->name('daerah.list');
    Route::get('/create', [DaerahController::class, 'create'])->name('daerah.create');
});
Route::prefix('arena')->group(function () {
    Route::get('/', [ArenaController::class, 'index'])->name('arena.list');
    Route::get('/create', [ArenaController::class, 'create'])->name('arena.create');
});
// Route::get('/daerah/create', DaerahCreate::class)->name('daerah.create');
Route::get('/login', [AuthController::class, 'login'])->name('login.page');
Route::get('/register', [AuthController::class, 'register'])->name('register.page');
Route::get('/forgot-password', [AuthController::class, 'forgotPasswordPage'])->name('forgotPasswordPage.page');
