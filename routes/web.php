<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostControllers;

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
    return view('home',[
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/community', function () {
    return view('community',[
        "title" => "Community",
        'active' => 'community'
    ]);
});

Route::get('/posts', [PostsControllers::class, 'index']);
//Halaman Single post
Route::get('posts/{post:slug}', [PostControllers::class, 'show']);

Route::get('/contacts', function () {
    return view('contacts',[
        "title" => "Contacts",
        'active' => 'contacts',
        "name" => "Irul Latif",
        "email" => "irulsoekamti94@gmail.com",
        "notelp" => "081290000520",
        "image" => "image.jpeg"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'active' => 'about',
        "name" => "Irul Latif",
        "email" => "irulsoekamti94@gmail.com",
        "image" =>  "image.jpeg"
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');