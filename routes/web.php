<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route:: get('/', [HomeController::class, 'homePage']);


Route:: get('/dashboard', [DashboardController::class, 'dashboardPage']);
Route:: get('/category', [CategoryController::class, 'categoryPage']);
