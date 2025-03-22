<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\productController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardController;

Route:: get('/', [HomeController::class, 'homePage']);

Route:: get('/userRegistration', [UserController::class, 'userRegistrationPage']);
Route:: get('/userLogin', [UserController::class, 'userLoginPage']);
Route:: get('/resetPassword', [UserController::class, 'resetPasswordPage']);
Route:: get('/sendOtp', [UserController::class, 'sendOtpPage']);
Route:: get('/verifyOtp', [UserController::class, 'verifyOtpPage']);
Route:: get('/userProfile', [UserController::class, 'profilePage']);


Route:: get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');
Route:: get('/customerPage', [customerController::class, 'customerPage'])->name('customer');
Route:: get('/categoryPage', [CategoryController::class, 'categoryPage'])->name('category');
Route:: get('/productPage', [productController::class, 'productPage'])->name('product');
Route:: get('/invoicePage', [invoiceController::class, 'invoicePage'])->name('invoice');
Route:: get('/salePage', [saleController::class, 'salePage'])->name('sale-page');
Route:: get('/reportPage', [reportController::class, 'reportPage'])->name('report');
