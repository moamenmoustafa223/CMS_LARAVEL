<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    Route::get('/auth/login',[AuthController::class,'login'])->name('admin.login');
    Route::post('/auth/login',[AuthController::class,'loginPost'])->name('admin.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin',[adminController::class,'index'])->name('admin.index');
    Route::get('/admin/postabout',[adminController::class,'getPostAbout'])->name('admin.getPostAbout');

    Route::get('/admin/showabout',[adminController::class,'getShowAbout'])->name('admin.getShowAbout');
    Route::post('/admin/postAbout',[AdminController::class,'postAbout'])->name('admin.postAbout');
    Route::delete('/admin/deleteAbout/{id}',[AdminController::class,'deleteAbout'])->name('admin.deleteAbout');
    Route::get('/admin/editAbout/{id}',[AdminController::class,'editAbout'])->name('admin.editAbout');
    Route::put('/admin/updateAbout/{id}',[AdminController::class,'updateAbout'])->name('admin.updateAbout');

    Route::delete('/logout',[AuthController::class,'logout'])->name('admin.logout');
});

Route::get('/', function () {
    return view('landingpage.index');
})->name('index');
