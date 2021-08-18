<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControllers;

use App\Models\Category;
use App\Models\User;

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

Route::get('/posts', [PostControllers::class, 'index']);
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

