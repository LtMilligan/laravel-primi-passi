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
    $message = 'Hello Laravel';
    return view('home', compact('message'));
})->name('home');

Route::get('/img1', function () {
    $img1 = 'https://placehold.co/600x400?text=Page1';
    return view('page1', compact('img1'));
})->name('page1');

Route::get('/img2', function () {
    $img2 = 'https://placehold.co/600x400?text=Page2';
    return view('page2', compact('img2'));
})->name('page2');

Route::get('/img3', function () {
    $img3 = 'https://placehold.co/600x400?text=Page3';
    return view('page3', compact('img3'));
})->name('page3');