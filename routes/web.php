<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\EditProduct;
use App\Http\Livewire\ShowCategory;
use App\Http\Livewire\ShowProducts;

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
    return view('welcome');
});
Route::get('api/products', [ProductController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', ShowProducts::class)->name('admin.index');

    Route::get('/admin/categories', function () {
        return view('categories.index');
    })->name('categories.index');
    Route::get('categories/{category}', ShowCategory::class)->name('categories.show');

    Route::get('products/create', CreateProduct::class)->name('products.create');
    Route::get('products/{product}/edit', EditProduct::class)->name('products.edit');
    Route::post('products/{product}/files', [ProductController::class, 'files'])->name('products.files');

    // Route::get('api/products', [ProductController::class, 'index']);
    Route::get('api/product/{name}', [ProductController::class, 'search']);
    
});
