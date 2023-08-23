<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| PATANG PULUH PATANG
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/auth/login', [AuthController::class, 'loginPost'])->name('admin.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::resource('/carousel', CarouselController::class);
    Route::resource('/logo', LogoController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/schedule', ScheduleController::class);
});

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/products',[HomeController::class, 'products'])->name('products');
