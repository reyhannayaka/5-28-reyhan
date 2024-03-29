<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view ('index', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view ('About', [
        "title" => "About",
        "nama" => "Reyhan Nayaka Utomo",
        "email" => "reyhan@smktelkom-pwt.sch.id",
        "gambar" => "spider-man-miles-morales-logo-4k-iphone-x-wallpaper-ilikewallpaper_com"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery', [
        "title" => "Gallery"
    ]);
});

// Route::resource('/contacts', ContactController::class);
Route :: get('/contacts/create',[ContactController :: class,'create'])->name('contacts.create');
Route :: post('/contacts/store',[ContactController :: class,'store'])->name('contacts.store');

Auth::routes();

Route :: group(['middleware'=>['auth']],function(){
    Route::get('/home',[App\Http\Controllers HomeController::class,'index'])->name('home');
    Route::get('/contacts/index',[ContactController::class,"index'])->name('contacts.index');
    Route :: get('/contacts/(id)/edit',[ContactController :: class,'edit')->name('contacts.edit');
    Route :: get('/contacts/(id)/update',[ContactController :: class,'update'])->name('contacts.update');
    
});  