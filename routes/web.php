<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductCategoryController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/cartEmpty', function () {
    return view('layouts.pages.cartempty');
})->name('cartEmpty');
Route::get('/cart', function () {
    return view('layouts.pages.cart');
})->name('cart');
Route::get('/product', function () {
    return view('layouts.pages.product');
})->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth', 'admin')->group(function () {

//product
    Route::get('/productindex', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    //user
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/password/{id}', [UserController::class, 'password'])->name('user.password');
    Route::post('/user/password/update/{id}', [UserController::class, 'password_update'])->name('user.password.update');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    //product category
    Route::get('/category', [ProductCategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [ProductCategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [ProductCategoryController::class, 'store'])->name('category.store');

    Route::get('/category/edit/{id}', [ProductCategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [ProductCategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('category.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
