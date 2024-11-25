<?php

use GuzzleHttp\Middleware;
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
    return view('front.home.index');
})->name('home');

// product
Route::get('product/starlink', function () {
    return view('front.product.starlink');
})->name('product.starlink');
Route::get('product/kios', function () {
    return view('front.product.kios');
})->name('product.kios');
Route::get('product/ifp', function () {
    return view('front.product.ifp');
})->name('product.ifp');

// solution
Route::get('solution/smartclass', function () {
    return view('front.solution.smartclass');
})->name('solution.smartclass');
Route::get('solution/videotron', function () {
    return view('front.solution.videotron');
})->name('solution.videotron');
Route::get('solution/datacenter', function () {
    return view('front.solution.datacenter');
})->name('solution.datacenter');

// blog
Route::get('blog', function () {
    return view('front.blog.index');
})->name('blog.index');
Route::get('blog/detail', function () {
    return view('front.blog.detail.index');
})->name('blog.detail.index');

// career
Route::get('career', function () {
    return view('front.career.index');
})->name('career.index');

// about us
Route::get('aboutus', function () {
    return view('front.aboutus.index');
})->name('aboutus.index');

// contact
Route::get('contact', function () {
    return view('front.contact.index');
})->name('contact.index');

Route::get('/dashboard', function () {
    return view('admin.dashboard');  
})->name('admin.dashboard');
Route::middleware('auth')->group(function () {
});