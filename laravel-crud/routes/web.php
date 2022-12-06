<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/post-add', [PostController::class, 'create'])->name('post.add');
Route::post('/post-add', [PostController::class, 'store'])->name('post.store');
Route::get('/post-detail/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/post-edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post-edit', [PostController::class, 'update'])->name('post.update');
Route::get('/post-delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
