<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DrashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/drashboard', [DrashboardController::class, 'index'])->name('drashboard');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/perfiles/index', [PerfilController::class, 'index'])->name('perfiles.index');

Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfiles.create');
Route::post('perfiles', [PerfilController::class, 'store'])->name('perfiles.store');


Route::get('/categorias/index', [CategoryController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoryController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoryController::class, 'store'])->name('categorias.store');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categorias.edit');
Route::patch('/{id}', [CategoryController::class, 'update'])->name('categorias.update');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
