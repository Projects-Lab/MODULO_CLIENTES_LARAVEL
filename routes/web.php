<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClienteController::class, 'index'])->name('historia.home');
Route::get('coworking/nuevo', [ClienteController::class, 'create'])->name('historia.create');
Route::post('coworking/create', [ClienteController::class, 'store'])->name('historia.store');
Route::get('coworking/editar/{id}', [ClienteController::class, 'edit'])->name('historia.editar');
Route::get('coworking/listar/{id}', [ClienteController::class, 'show'])->name('historia.listar');
Route::put('coworking/actualizar/{clientes}', [ClienteController::class, 'update'])->name('historia.update');
Route::delete('coworking/eliminar/{data}', [ClienteController::class, 'destroy'])->name('historia.delete');


//Route::resource('afiliados', ClienteController::class)->parameters(['afiliados' => 'historia'])->names('historia');
//Route::resource('historia', ClienteController::class);

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
