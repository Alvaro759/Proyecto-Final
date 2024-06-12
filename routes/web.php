<?php

use App\Http\Controllers\{
    CarritoController,
    FilterController,
    HomeController,
    LoginController,
    PanelController,
    PerfilController,
    ProductController,
    UserController,
    VerificationController,
    PedidoController
};
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
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
    Route::post('/perfil/datos', [PerfilController::class, 'update'])->name('perfil.update');
    Route::post('/perfil/updateDireccion', [PerfilController::class, 'updateDireccion'])->name('perfil.updateDireccion');
    Route::post('/perfil/direccion', [PerfilController::class, 'saveDireccion'])->name('perfil.direccion');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/carrito/add', [CarritoController::class, 'addCarrito'])->name('carrito.add');
    Route::post('/carrito/comprar', [CarritoController::class, 'comprarYa'])->name('carrito.comprar');
    Route::post('/carrito/remove', [CarritoController::class, 'removeCarrito'])->name('carrito.remove');
    Route::get('/pago', [PedidoController::class, 'showPago'])->name('pago.show');
    Route::post('/pago', [PedidoController::class, 'processPago'])->name('pago.process');
});

Route::middleware('guest')->group(function () {
    Route::view('/login', "login.login")->name('login');
    Route::view('/registro', "login.register")->name('registro');
    Route::view('/login/failed', "login.loginFailed")->name('loginFailed');
    Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('password.request');
    Route::post('/forgot-password', [LoginController::class, 'sendEmail_password'])->name('password.email');
    Route::get('/reset-password/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [LoginController::class, 'reset_password'])->name('password.update');
    Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
    Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
});

Route::get('/carrito', [CarritoController::class, 'index']);


Route::middleware('admin')->group(function () {
    Route::get('/panel-de-control', [PanelController::class, 'index'])->name('panel.index');
    Route::get('/panel-de-control/create', [PanelController::class, 'create'])->name('panel.create');
    Route::post('/panel-de-control', [PanelController::class, 'store'])->name('panel.store');
    Route::get('/panel-de-control/{id}', [PanelController::class, 'show'])->name('panel.show');
    Route::get('/panel-de-control/{id}/edit', [PanelController::class, 'edit'])->name('panel.edit');
    Route::delete('/panel-de-control/{id}', [PanelController::class, 'destroy'])->name('panel.destroy');
    Route::put('/panel-de-control/{id}', [PanelController::class, 'update'])->name('panel.update');
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('users.update');
});

Route::get('/{nombreCategoria}/{nombreProducto}', [ProductController::class, 'index']);
Route::get('/{nombreCategoria}', [FilterController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
