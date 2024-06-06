<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/profile', function () {
    return view('frontend.profile');
})->name('profile');

// live
Route::get('/live', function () {
    return view('frontend.live');
})->name('live');

// character
Route::get('/character', function () {
    return view('frontend.character');
})->name('character');

// scan
Route::get('/scan', function () {
    return view('frontend.scan');
})->name('scan');

// play
Route::get('/play', function () {
    return view('frontend.play');
})->name('play');


// result
Route::get('/result', function () {
    return view('frontend.result');
})->name('result');

// chats
Route::get('/chats', function () {
    return view('frontend.chats');
})->name('chats');

// chats
Route::get('/messages/{id}', function () {
    return view('frontend.messages');
})->name('messages');

// settings
Route::get('/settings', function () {
    return view('frontend.settings');
})->name('settings');

// e-commerce
Route::get('/e-commerce', function () {
    return view('frontend.ecommerce');
})->name('e-commerce');
