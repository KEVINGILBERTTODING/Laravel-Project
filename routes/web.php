<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Kevin Gilbert Toding",
        "nim" => "A22.2020.02832",
        "jurusan" => "Teknik Informatika",
        "img" => "profile.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
