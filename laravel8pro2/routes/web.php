<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/students',[StudentController::class,'fetchStudents']);


Route::get('/add-post',[PostController::class,'addPost']);

Route::post('/posts', [PostController::class,'createPost'])->name('createPost');

Route::get('/posts', [PostController::class, 'getPost']);

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('getPostById');

Route::get('/post-deleted/{id}', [PostController::class, 'deletePost']);

Route::get('/edit-post/{id}', [PostController::class, 'editPost']);

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');