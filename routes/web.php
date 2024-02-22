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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

//--- CONTROLLER ----//

//-- MEMBUAT CONTROLLER --//
// Langkah D
Route::get('/hello', [WelcomeController::class, 'hello']);

// Tugas Modifikasi 
Route::get('/', [PageContoller::class, 'index']);
Route::get('/about', [PageContoller::class, 'about']);
Route::get('/articles/{id}', [PageContoller::class, 'articles']);

// Tugas HomeController
Route::get('/home', [HomeController::class, 'HomeController']);

// Tugas AboutController
Route::get('/about', [AboutController::class, 'about']);

// Tugas ArticlesController
Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

//-- RESOURCE CONTROLLER --//
// Langkah B
Route::resource('photos', PhotoController::class);

// Langkah D 
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
