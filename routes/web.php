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
Route::resource('/contacts', ContactController::class);

Auth::routes();

Route :: group(['middleware'=>['auth']],function(){
    Route :: get('/home',[App\Http\Controllers Home Controller :: class,'index'])->name('home');

}); 