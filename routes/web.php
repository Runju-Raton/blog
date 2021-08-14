<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('category')->name('category')->group(function(){
    Route::get('/manage',[CategoryController::class,'manage'])->name('manage');
    Route::get('/createForm',[CategoryController::class,'createForm'])->name('createForm');
    Route::post('/create',[CategoryController::class,'create'])->name('create');
    Route::get('/updateForm/{category}',[CategoryController::class,'updateForm'])->name('updateForm');
    Route::post('/update',[CategoryController::class,'update'])->name('update');
    Route::post('/delete',[CategoryController::class,'delete'])->name('delete');
});

Route::prefix('post')->name('post')->group(function(){
    Route::get('/manage',[PostController::class,'manage'])->name('manage');
    Route::get('/createForm',[PostController::class,'createForm'])->name('createForm');
    Route::post('/create',[PostController::class,'create'])->name('create');
    Route::get('/updateForm/{post}',[PostController::class,'updateForm'])->name('updateForm');
    Route::post('/update',[PostController::class,'update'])->name('update');
    Route::post('/delete',[PostController::class,'delete'])->name('delete');
});