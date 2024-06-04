<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VerificationController;
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

Route::middleware('auth')->group(function () {
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verification'])->middleware(['auth', 'signed'])->name('verification.verify');
    Route::post('/email/verification-notification', [VerificationController::class, 'sendEmail'])->middleware(['auth'])->name('verification.send');
});

Route::view('/login', "login.login")->name('login');
Route::view('/registro', "login.register")->name('registro');
Route::view('/login/failed', "login.loginFailed")->name('loginFailed');

Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('password.request');
Route::post('/forgot-password', [LoginController::class, 'sendEmail_password'])->name('password.email');
Route::get('/reset-password/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [LoginController::class, 'reset_password'])->name('password.update');



Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');

Route::get('/carrito', [CarritoController::class, 'index']);
Route::get('/{nombreCategoria}/{nombreProducto}', [ProductController::class, 'index']);
Route::get('/{nombreCategoria}', [FilterController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
