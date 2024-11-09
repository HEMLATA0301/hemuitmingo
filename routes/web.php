<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class,'index'])->name('index');
Route::get('/about-us', [WebController::class,'about'])->name('about');
Route::get('/our-service', [WebController::class,'service'])->name('service');
Route::get('/contact-us', [WebController::class,'contact'])->name('contact');
Route::post('enquiry-store',[EnquiryController::class,'store'])->name('enquiry.store');
Route::get('/pricing', [WebController::class,'pricing'])->name('pricing');
Route::get('/career', [WebController::class,'career'])->name('career');
Route::post('career-store',[CareerController::class,'store'])->name('career.store');
Route::get('/product', [WebController::class,'product'])->name('product');
Route::get('/servicepage', [WebController::class,'servicepage'])->name('servicepage');
Route::get('/client', [WebController::class,'client'])->name('client');
Route::get('/term-us', [WebController::class,'termus'])->name('termus');
Route::get('/privacy', [WebController::class,'privacy'])->name('privacy');

//Authentication
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login-submit',[AuthController::class,'loginSubmit'])->name('login-submit');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');

    Route::resource('product',ProductController::class);
    Route::get('enquiry',[EnquiryController::class,'index'])->name('enquiry.index');
    Route::get('career',[CareerController::class,'index'])->name('career.index');
    Route::resource('customer',CustomerController::class);
});

//Clear all cache
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});