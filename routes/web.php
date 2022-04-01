<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\product\ProductController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/', [HomeController::class, 'home'])->name('home');

//User crud

Route::get('/add-user', [UsersController::class, 'addUser'])->name('add-user');
Route::post('/new-user', [UsersController::class, 'newUser'])->name('new-user');
Route::get('/manage-user', [UsersController::class, 'manageUser'])->name('manage-user');
Route::get('/change-status/{id}', [UsersController::class, 'changeStatus'])->name('change-status');
Route::get('/delete-user/{id}', [UsersController::class, 'deleteUser'])->name('delete-user');
Route::get('/edit-user/{id}', [UsersController::class, 'edit'])->name('edit-user');
Route::post('/update-user/', [UsersController::class, 'updateUser'])->name('update-user');


//Product crud
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/update-product/', [ProductController::class, 'updateProduct'])->name('update-product');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard');
