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

Route::get('/homepage', function () {
    $welcome = 'Hello World!';
    return view('home', compact('welcome'));
})->name('homepage');

Route::get('/about-us', function () {
    $info_1 = 'About Us';
    return view('about_us', compact('info_1'));
})->name('about_us');

Route::get('/work-with-us', function () {
    $info_2 = 'Work with us!';
    return view('work_with_us', compact('info_2'));
})->name('work_with_us');
