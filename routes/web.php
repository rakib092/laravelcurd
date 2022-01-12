<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/categories/create',[CategoryController::class,'create']);
Route::post('/categories',[CategoryController::class,'store']);
Route::get('/categories/edit/{id}',[CategoryController::class,'edit']);
Route::post('/categories/update/{id}',[CategoryController::class,'update']);
Route::post('/categories/delete/{id}',[CategoryController::class,'destroy']);

require __DIR__.'/auth.php';
