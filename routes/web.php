<?php

use Illuminate\framework\factory\Route;
use App\controllers\admin\FeedBackController;
use App\controllers\admin\CoursesController;
use App\controllers\admin\TeachersController;
use App\controllers\admin\UsersController;
use App\controllers\client\HomeController;
use App\controllers\client\CoursesController as ClientCoursesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', [FeedBackController::class, 'index']);
Route::get('/danh-sach-mon', [FeedBackController::class, 'show']);
Route::get('/mon-hoc', [CoursesController::class, 'index']);
Route::get('/giang-vien', [TeachersController::class, 'index']);
Route::get('/sinh-vien', [UsersController::class, 'index']);

Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/danh-sach-mon-hoc', [ClientCoursesController::class, 'index']);
Route::get('/chi-tiet-mon-hoc', [ClientCoursesController::class, 'detail']);


// Route::get('/admin/products', [ProductController::class, 'index']);
// Route::get('/admin/product/new', [ProductController::class, 'store']);
// Route::post('/admin/product/new', [ProductController::class, 'store']);
// Route::post('/admin/product/destroy/{param}', [ProductController::class, 'destroy']);
// Route::post('/admin/product/edit/{param}', [ProductController::class, 'edit']);