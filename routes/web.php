<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
Route::get('dashboard',[AdminController::class,'GetDashboard'])->name('dashboard');
Route::get('categories',[CategoryController::class,"GetCategories"])->name("get-categories");
Route::post('categories',[CategoryController::class,"CreateCategory"])->name("create-category");
//18.07.2023-staj12 alt kısımdan başaladık
Route::get('categories/{category_id?}',[CategoryController::class,'GetOneCategory'])->name('get-one-category');
