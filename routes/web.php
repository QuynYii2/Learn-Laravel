<?php

use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'listCat']);
Route::get('/post/listCategory', [PostController::class, 'listCat'])->name('post.listCat');
Route::get('/post/addCategory', [PostController::class, 'addCat'])->name('post.creatCat');
Route::post('/post/addCategory', [PostController::class, 'saveCat'])->name('post.saveCat');
Route::match(['get', 'post'], '/post/updateCategory/{id}', [PostController::class, 'updateCat'])->name('post.updateCat');
Route::get('/post/deleteCategory/{id}', [PostController::class, 'deleteCat'])->name('post.deleteCat');

Route::get('/post/listPost', [PostController::class, 'listPost'])->name('post.listPost');
Route::get('/post/addPost', [PostController::class, 'addPost'])->name('post.creatPost');
Route::post('/post/addPost', [PostController::class, 'savePost'])->name('post.savePost');
Route::match(['get', 'post'], '/post/updatePost/{id}', [PostController::class, 'updateCat'])->name('post.updatePost');
Route::get('/post/deletePost/{id}', [PostController::class, 'deletePost'])->name('post.deletePost');
