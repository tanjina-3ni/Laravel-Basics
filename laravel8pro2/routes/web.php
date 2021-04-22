<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditorController;



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

Route::get('/add-user',[UserController::class, 'insertRecord']);

Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

Route::get('/add-comment/{id}', [PostController::class, 'addComments']);

Route::get('/comments/{id}', [PostController::class, 'getComments']);

Route::get('/add-roles', [RoleController::class, 'addRole']);

Route::get('/add-users', [RoleController::class, 'addUser']);

Route::get('/rolebyuser/{id}', [RoleController::class, 'getRolesByUser']);

Route::get('/userbyrole/{id}', [RoleController::class, 'getAllUserByRole']);

Route::get('/add-employee', [EmployeeController::class, 'addEmployee']);

Route::get('/love', [PostController::class, 'iLoveYou']);

Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);

Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV']);

Route::get('/get-all-employees', [EmpController::class, 'getAllEmployees']);

Route::get('download-PDF', [EmpController::class,'downloadPDF']);

Route::get('/import-form', [EmployeeController::class, 'importForm']);

Route::post('/import', [EmployeeController::class,'import'])->name('import.file');

Route::get('/resize-image', [ImageController::class, 'resizeImage']);

Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])->name('image-resize');

Route::get('/dropzone', [DropzoneController::class, 'dropzone']);

Route::post('/dropzone', [DropzoneController::class, 'dropzoneStore'])->name('dropzoneStore');

Route::get('/gallery', [GalleryController::class, 'gallery']);

Route::get('/editor', [EditorController::class, 'editor']);

Route::get('/add-student', [StudentController::class, 'addStudent']);

Route::post('/add-student', [StudentController::class, 'storeStudent'])->name('student-store');


