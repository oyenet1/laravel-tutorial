<?php
// use App\Http\Controllers\PostController;

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

Route::get('/', [\App\Http\Controllers\PostController::class, 'homepage'])->name('homepage');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show']);
// Route::get('/posts/{id}', function ($id) {
//     return view('posts.show', compact(['id']));
// });

Route::view('/abouttodo', 'about')->name('about');
// php artisan make:controller
