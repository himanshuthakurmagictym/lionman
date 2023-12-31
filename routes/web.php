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

Route::get('/security-services', function() {
    return view('security-services');
})->name('security-services');
Route::get('/housekeeping-services', function() {
    return view('housekeeping-services');
})->name('housekeeping-services');
Route::get('/manpower-outsourcing', function() {
    return view('manpower-outsourcing');
})->name('manpower-outsourcing');
Route::get('/facility-management', function() {
    return view('facility-management');
})->name('facility-management');


Route::get('/get-a-quote', function() {
    return view('get-a-quote');
})->name('get-a-quote');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::post('/contactForm', [ServicesController::class, 'contactForm'])->name('contactForm');
Route::post('/applyForm', [ServicesController::class, 'applyForm'])->name('applyForm');
Route::post('/getaquoteForm', [ServicesController::class, 'getaquoteForm'])->name('getaquoteForm');

Route::get('/services/{id}', [ServicesController::class, 'index'])->name('services');

