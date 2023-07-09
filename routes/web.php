<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ServicesController;
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
    return view('home');
})->name('home');

Route::get('/about-us', function() {
    return view('about-us');
})->name('about-us');

Route::get('/our-clients', function() {
    return view('our-clients');
})->name('our-clients');

Route::get('/careers', function() {
    return view('careers');
})->name('careers');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::post('/contactForm', [ServicesController::class, 'contactForm'])->name('contactForm');
Route::get('/services/{id}', [ServicesController::class, 'index'])->name('services');

