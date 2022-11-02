<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\VentasController;
//Route::get('/', function () {
//    return view('welcome');
//});
route::get('/', [PersonasController::class,'index'])->name('personas.index');
route::get('/create', [PersonasController::class,'create'])->name('personas.create');
route::get('/edit', [PersonasController::class,'edit'])->name('personas.edit');
route::get('/lista', [PersonasController::class,'show'])->name('personas.show');
route::get('/agregar', [PersonasController::class,'create'])->name('personas.create');
route::get('/actualizar', [PersonasController::class,'edit'])->name('personas.edit');
route::post('/venta', [VentasController::class,'store'])->name('ventas.store');
route::post('/store', [PersonasController::class,'store'])->name('personas.store');
route::get('/listaventas', [VentasController::class,'show'])->name('ventas.show');