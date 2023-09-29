<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ViedoController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [HomeController::class, 'Hotel_website'])->name('hotel');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/trending', [HomeController::class, 'trending'])->name('trending');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/apartmentdetails', [HomeController::class, 'apartmentdetails'])->name('apartmentdetails');
Route::get('/apartmentlist', [HomeController::class, 'apartmentlist'])->name('apartmentlist');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
// Route::get('/instagram-feed', [InstagramController::class, 'getInstagramFeed']);
Route::post('/Appartement/create', [AppartementController::class,'store'])->name('Appartement.store');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/cp', [HomeController::class, 'index'])->name('cp');
    Route::get('/Appartement', [AppartementController::class,'index'])->name('Appartement.index');
    Route::resource('category', CategoryController::class);
    Route::resource('section', SectionController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('viedo', ViedoController::class);
    Route::resource('contactForm', ContactController::class);
    Route::resource('room', RoomController::class);

});