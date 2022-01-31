<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomepageController;
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

Route::get('/', [HomepageController::class, 'show'])->name('homepage');

Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::get('/comment/{comment}', [CommentController::class, 'show'])->name('comment.show');
Route::get('/comments', [CommentController::class, 'index'])->name('comment.list');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/cities-in-poland', [ContentController::class, 'citiesInPoland'])->name('content.cities_in_poland');