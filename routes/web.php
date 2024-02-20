<?php
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

use Illuminate\Support\Facades\Route;

//---- BASIC ROUTING ----//

// Langkah B
Route::get('/hello', function () {
    return 'Hello World';
});

// Langlah D
Route::get('/world', function () {
    return 'Wolrd';
});

// Tugas F
Route::get('/', function () {
    return 'Selamat Datang';
});

// Tugas G 
Route::get('/about', function () {
    return '2241720205 - Faradilla Roudhotul S';
});

//---- ROUTE PARAMETERS ----// 

//Langkah A
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

// Langkah D 
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Tugas F 
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

//---- OPERATIONAL PARAMETERS ----//

// Langkah A 
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

// Langkah D 
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

//---- ROUTE NAME ----//

// Langkah A 
Route::get('/user/profile', function () {
    //
})->name('profile');
