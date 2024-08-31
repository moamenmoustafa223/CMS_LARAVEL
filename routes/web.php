<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceImageController;
use App\Models\Article;
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

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::resource('/carousel', CarouselController::class);
    Route::resource('/logo', LogoController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/service', ServiceController::class);
    Route::get('/service/{id}', [ServiceController::class, 'showById'])->name('dashboard.service.showw');
    Route::get('/upload-images', [ServiceImageController::class, 'create'])->name('service.uploadImagesForm');
    Route::post('/upload-images', [ServiceImageController::class, 'uploadImages'])->name('service.uploadImages');
    Route::put('service-image/{id}', [ServiceImageController::class, 'update'])->name('serviceImage.update');
Route::delete('service-image/{id}', [ServiceImageController::class, 'destroy'])->name('serviceImage.destroy');

    Route::resource('/gallery', GalleryController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/schedule', ScheduleController::class);
    Route::resource('/abouts', AboutController::class);
    Route::resource('/article', ArticleController::class);
});


Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'show'])->name('home.services.show');
Route::post('/contact-submit', [HomeController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contacts',[HomeController::class, 'contact'])->name('contacts');
Route::get('/articles',[HomeController::class, 'article'])->name('articles');
Route::get('articles/{article:slug}', [HomeController::class, 'articleshow'])->name('articleshow');
