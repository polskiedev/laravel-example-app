<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FarmElementTypeController;
use App\Http\Controllers\FarmElementController;
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

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

//Farm Element Types
Route::get('/farm_element_type', [FarmElementTypeController::class, 'index'])->name('farm_element_type.index');
Route::get('/farm_element_type/create', [FarmElementTypeController::class, 'create'])->name('farm_element_type.create');
Route::post('/farm_element_type', [FarmElementTypeController::class, 'store'])->name('farm_element_type.store');

Route::get('/farm_element_types/{farm_element_type}/edit', [FarmElementTypeController::class, 'edit'])->name('farm_element_type.edit');
Route::put('/farm_element_types/{farm_element_type}/update', [FarmElementTypeController::class, 'update'])->name('farm_element_type.update');
Route::delete('/farm_element_types/{farm_element_type}/destroy', [FarmElementTypeController::class, 'destroy'])->name('farm_element_type.destroy');

//Farm Elements
Route::get('/farm_element', [FarmElementController::class, 'index'])->name('farm_element.index');
Route::get('/farm_element/create', [FarmElementController::class, 'create'])->name('farm_element.create');
Route::post('/farm_element', [FarmElementController::class, 'store'])->name('farm_element.store');

Route::get('/farm_elements/{farm_element}/edit', [FarmElementController::class, 'edit'])->name('farm_element.edit');
Route::put('/farm_elements/{farm_element}/update', [FarmElementController::class, 'update'])->name('farm_element.update');
Route::delete('/farm_elements/{farm_element}/destroy', [FarmElementController::class, 'destroy'])->name('farm_element.destroy');
