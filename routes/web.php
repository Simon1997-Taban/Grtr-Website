<?php

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

Route::get('/who-we-are',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/donors-partners',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do/livelihood',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do/education',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do/peace-building',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do/environment-protection',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do/wash',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/what-we-do/research',[App\Http\Controllers\PageController::class, 'index']);
Route::get('/projects',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/gallery',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/project-guide',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/contact-us',[App\Http\Controllers\PageController::class, 'index']);

Route::get('/blog/article/there-is-talent-hidden-in-the-bushes-/{id}',[App\Http\Controllers\PostController::class, 'single_post']);