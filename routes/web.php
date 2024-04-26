<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\InventarioController;

// login
Route::get('/', function () {
    return view('login/login');
});

// home
Route::controller(HomeController::class)->prefix('home')->group(function(){
    Route::name('Home')->get('/', 'index');
    // Route::post('/', 'index')->name('libros');
  });
// usuario
Route::controller(UsuarioController::class)->prefix('usuario')->group(function(){
Route::name('usuario')->get('/', 'index');
// Route::post('/', 'index')->name('libros');
});
// roles
Route::controller(RolesController::class)->prefix('roles')->group(function(){
  Route::name('rol')->get('/', 'index');
  // Route::post('/', 'index')->name('libros');
});
// inventario
Route::controller(InventarioController::class)->prefix('inventario')->group(function(){
  Route::name('inventario')->get('/', 'index');
  // Route::post('/', 'index')->name('libros');
});