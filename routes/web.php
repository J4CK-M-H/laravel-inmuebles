<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\RegisterController;
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
// Auth
Route::get('/registro', [RegisterController::class, 'index'])->name('register');
// SI la siguiente ruta no tiene ->name(''), tomara el name del anterior en este caso "register", siempre en cuando ambos tengan el mismo nombre de la ruta
Route::post('/registro', [RegisterController::class, 'store']);
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'search'])->name('search');

// perfil
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');

// Post propiedad
// Route::get('/post-propiedad', [PostController::class, 'index'])->name('post-propiedad');
// Route::post('/post-propiedad', [PostController::class, 'store'])->name('post-propiedad');

// Propiedad
Route::get('/mis-propiedades', [PropiedadController::class, 'index'])->name('mis-propiedades');
Route::get('/publicar-propiedad', [PropiedadController::class, 'create'])->name('propiedad.create');
Route::post('/publicar-propiedad', [PropiedadController::class, 'store'])->name('propiedad.store');
Route::get('/inmueble/{user:username}/propiedad/{propiedad}', [PropiedadController::class, 'show'])->name('propiedad.show');