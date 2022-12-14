<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\FacturaController;

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

Route::get('/', function () {
    return view('index');
});

Route::view('/', 'index')->name("index");
// Route::get('/', [PrecioController::class, 'principio'])->name('index');

Route::get('/precios', [PrecioController::class, 'index'])->name('precios.index');
Route::view('/precios/create', 'precios.create')->name("precios.create");

Route::get('/presupuesto/create', [PresupuestoController::class, 'create'])->name('presupuesto.create');
Route::get('/presupuesto', [PresupuestoController::class, 'ver'])->name('presupuesto.ver');

Route::get('/factura/create', [FacturaController::class, 'create'])->name('factura.create');
Route::get('/factura', [FacturaController::class, 'ver'])->name('factura.ver');


Route::post('/precios/store', [PrecioController::class, 'store'])->name("precios.store");
Route::delete("/precios/{id}", [PrecioController::class, 'borrar'])->name("precios.borrar");
Route::get("/precios/{id}/editar", [PrecioController::class, 'edit'])->name("precios.edit");
Route::post("/precios/{id}", [PrecioController::class, 'update'])->name("precios.update");


Route::get("/download/presupuesto", [PresupuestoController::class, 'download'])->name('download');
Route::get("/download/factura", [FacturaController::class, 'download'])->name('download');

Route::get("/presupuesto/presupuesto", [PresupuestoController::class, 'presupuesto'])->name('presupuesto.presupuesto');

// Route::view('/presupuesto', 'precios.index')->name("presupuesto.index");
// Route::post("/presupuesto", [PrecioController::class, 'presupuesto'])->name("presupuesto.index");

// Route::post('/presupuesto', function () {
//     $pdf = PDF::loadView('pruebaparapdf');
//     return $pdf->download('pruebapdf.pdf');
//   })->name("presupuesto");

