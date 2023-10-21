<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\LessonController; // Ajoutez cette ligne pour importer le contrôleur

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/lesson/{lesson:slug}', [\App\Http\Controllers\LessonController::class,'view'])->name('lesson.view');
Route::get('/author/{author}', [\App\Http\Controllers\AuthorController::class,'view'])->name('author.view');
