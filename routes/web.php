<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
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

Route::get('/dashboard',[DashboardController::class,'dashboard'])
->middleware(['auth'])->name('dashboard');

Route::get('/categories',[CategoryController::class,'index'])->middleware(['auth']);
Route::get('/categories/create',[CategoryController::class,'create'])->middleware(['auth']);
Route::post('/categories',[CategoryController::class,'store'])->middleware(['auth']);
Route::get('/categories/edit/{id}',[CategoryController::class,'edit'])->middleware(['auth']);
Route::put('/categories/{id}',[CategoryController::class,'update'])->middleware(['auth']);
Route::delete('/categories/{id}',[CategoryController::class,'destroy'])->middleware(['auth']);


Route::get('/tasks',[TaskController::class,'index'])->middleware(['auth']);
Route::get('/tasks/create',[TaskController::class,'create'])->middleware(['auth']);
Route::post('/tasks',[TaskController::class,'store'])->middleware(['auth']);
Route::get('/tasks/{id}',[TaskController::class,'show'])->middleware(['auth']);
Route::get('/tasks/{id}/edit',[TaskController::class,'edit'])->middleware(['auth']);
Route::put('/tasks/{id}',[TaskController::class,'update'])->middleware(['auth']);
Route::delete('/tasks/{id}',[TaskController::class,'destroy'])->middleware(['auth']);



Route::get('/comments/create',[CommentController::class,'create'])->middleware(['auth']);
Route::post('/comments',[CommentController::class,'store'])->middleware(['auth']);

require __DIR__.'/auth.php';
