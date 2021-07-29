<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::get('/',[AdminController::class,'LoginForm'])->name('auth.loginForm');
Route::post('/login',[AdminController::class,'login'])->name('auth.login');
//product
Route::prefix('product')->middleware('auth')->group(function () {
    Route::get('/index',[ProductController::class,'index'])->name('product.index');
    Route::get('/create', [ProductController::class,'create'])->name('product.create');
    route::post('/add',[ProductController::class,'store'])->name('product.store');
    route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    route::patch('/update/{id}',[ProductController::class,'update'])->name('product.update');
    route::delete('/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    route::delete('/delete/{id}',[ProductController::class,'deleted'])->name('product.deleted');
    route::get('/restore/{id}',[ProductController::class,'restore'])->name('product.restore');
    route::get('/trashed',[ProductController::class,'trashed'])->name('product.trashed');
});
Route::prefix('category')->middleware('auth')->group(function () {
    Route::get('/index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/create', [CategoryController::class,'create'])->name('category.create');
    route::post('/add',[CategoryController::class,'store'])->name('category.store');
    route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    route::patch('/update/{id}',[CategoryController::class,'update'])->name('category.update');
    route::delete('/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
    route::delete('/delete/{id}',[CategoryController::class,'deleted'])->name('category.deleted');
    route::get('/restore/{id}',[CategoryController::class,'restore'])->name('category.restore');
    route::get('/trashed',[CategoryController::class,'trashed'])->name('category.trashed');
});
Route::prefix('blog')->middleware('auth')->group(function () {
    Route::get('/index',[CategoryBlogController::class,'index'])->name('blogs.index');
    Route::get('/create', [CategoryBlogController::class,'create'])->name('blogs.create');
    route::post('/add',[CategoryBlogController::class,'store'])->name('blogs.store');
    route::get('/edit/{id}',[CategoryBlogController::class,'edit'])->name('blogs.edit');
    route::patch('/update/{id}',[CategoryBlogController::class,'update'])->name('blogs.update');
    route::delete('/destroy/{id}',[CategoryBlogController::class,'destroy'])->name('blogs.destroy');
    route::delete('/delete/{id}',[CategoryBlogController::class,'deleted'])->name('blogs.deleted');
    route::get('/restore/{id}',[CategoryBlogController::class,'restore'])->name('blogs.restore');
    route::get('/trashed',[CategoryBlogController::class,'trashed'])->name('blogs.trashed');
});

Route::prefix('post')->middleware('auth')->group(function () {
    Route::get('/index',[PostController::class,'index'])->name('post.index');
    Route::get('/create', [PostController::class,'create'])->name('post.create');
    route::post('/add',[PostController::class,'store'])->name('post.store');
    route::get('/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    route::patch('/update/{id}',[PostController::class,'update'])->name('post.update');
    route::delete('/destroy/{id}',[PostController::class,'destroy'])->name('post.destroy');
    route::delete('/delete/{id}',[PostController::class,'deleted'])->name('post.deleted');
    route::get('/restore/{id}',[PostController::class,'restored'])->name('post.restore');
    route::get('/trashed',[PostController::class,'trashed'])->name('post.trashed');
});