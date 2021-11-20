<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas del UserCRUD
Route::get('/users', [UserController::class, 'index']);
Route::delete('/delete/{id}', [UserController::class, 'destroy']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'update']);
Route::post('/create', [UserController::class, 'store']);
Route::get('/create-user', [UserController::class, 'create']);
//Route::get('/show/{id}', [UserController::class, 'show']);

//Rutas del CatalogueCRUD
Route::get('/catalogues', [CatalogueController::class, 'index']);
Route::delete('/delete-catalogue/{id}', [CatalogueController::class, 'destroy']);
Route::get('/edit-catalogue/{id}', [CatalogueController::class, 'edit']);
Route::post('/update-catalogue/{id}', [CatalogueController::class, 'update']);
Route::post('/create-catalogue', [CatalogueController::class, 'store']);
Route::get('/create-catalogue', [CatalogueController::class, 'create']);
//Route::get('/show-catalogue/{id}', [CatalogueController::class, 'show']);

//Rutas del ProductCRUD
Route::get('/products', [ProductController::class, 'index']);
Route::delete('/delete-product/{id}', [ProductController::class, 'destroy']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::post('/update-product/{id}', [ProductController::class, 'update']);
Route::post('/create-product', [ProductController::class, 'store']);
Route::get('/create-product', [ProductController::class, 'create']);
//Route::get('/show-product/{id}', [ProductController::class, 'show']);