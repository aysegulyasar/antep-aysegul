<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
    return view('layouts.index-master');
});

Route::get('/hakkimda', [HomeController::class, 'showUsers']);
Route::get('/urunler', [HomeController::class, 'showProducts']);


Route::get('/create-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/save-product', [ProductController::class, 'store'])->name('product.save');
Route::get('/show-product', [ProductController::class, 'index'])->name('product.index');
Route::get('/export-products', [\App\Http\Controllers\ProductController::class, 'export'])->name('product.export');


Route::post('/import-categories',[\App\Http\Controllers\CategoryController::class, 'import'])->name('category.import');
Route::get('/upload-categories',[\App\Http\Controllers\CategoryController::class,'upload'])->name('category.upload');

/*
Route::get('/export-products', [ProductController::class, 'export'])->name('product.export');
Route::get('/show-sliders','SliderController@index')->name('slider.index');
*/
