<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/about', function () {
//     return "I am learning LARAVEL";
// });

// using view method
Route::view('/contact', 'contact');

// get method
// Route::get('/about', function () {
//     $name = "Anthony";
//     $age = 67;
//     return view('about', ['name' => $name, 'age' => $age]);
// });

// passing data to view
Route::get('/about', function () {
    $name = "Anthony";
    $age = 67;
    return view('about', compact(['name', 'age']));
});