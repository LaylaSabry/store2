<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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


Route::get('/cats',   [CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
Route::post('/save', [CategoryController::class, 'save'])->name('categories.save');
Route::DELETE('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/update/{id}', [CategoryController::class, 'update']);
Route::get('/edite', [CategoryController::class, 'edite'])->name('categories.edite');
// articls routes :-

Route::get('/article/{id}',[ProductController::class, 'list']);
Route::get('/details/{id}',[ProductController::class, 'showDetails']);
Route::get('/updateArticle/{id}', [ProductController::class, 'update']);
Route::get('/editeArticle', [ProductController::class, 'edite'])->name('articls.edite');
Route::DELETE('/deleteArticle/{id}', [ProductController::class, 'delete'])->name('article.delete');

Route::get('/createArticle', [ProductController::class, 'create']);
Route::post('/saveArticle', [ProductController::class, 'save'])->name('article.save');


