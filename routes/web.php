<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::view('/', 'welcome')->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/posts/create', [BlogController::class, 'create'])->name('posts.create');
Route::post('/posts', [BlogController::class, 'store'])->name('posts.store');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
