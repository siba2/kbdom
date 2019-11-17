<?php

Auth::routes();

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');
