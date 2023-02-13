<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;



Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('/product-details',[FrontController::class,'productDetails'])->name('product-details');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
//    category
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category',[CategoryController::class,'newCategory'])->name('new-category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('update-category');
    Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete-category');

//Brand
    Route::get('/add-brand',[BrandController::class,'addBrand'])->name('add-brand');
    Route::post('/new-brand',[BrandController::class,'newBrand'])->name('new-brand');
    Route::get('/manage-brand',[BrandController::class,'manageBrand'])->name('manage-brand');
    Route::get('/edit-brand/{id}',[BrandController::class,'editBrand'])->name('edit-brand');
    Route::post('/update-brand/{id}',[BrandController::class,'updateBrand'])->name('update-brand');
    Route::get('/delete-brand/{id}',[BrandController::class,'deleteBrand'])->name('delete-brand');
//Product
    Route::get('/add-product',[ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/new-product',[ProductController::class,'newProduct'])->name('new-product');
});



