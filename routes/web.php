<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts',[PostController::class, 'store']);
Route::post('/posts/{post}/rate', [PostController::class, 'rate'])->name('ratings.store');
Route::get('/posts/{post}', [PostController::class, 'show']);
// Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');