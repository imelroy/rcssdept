<?php

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

Route::get('/', function () {
    return view('main');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('cs', function () {
    return view('cs');
});
Route::get('commerce', function () {
    return view('commerce');
});
Route::get('bio', function () {
    return view('bio');
});
Route::get('examination', function () {
    return view('examination');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('signin', function () {
    return view('signin');
});
Route::get('signup', function () {
    return view('signup');
});