<?php

Auth::routes();

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::prefix('/project')->group(function () {
    Route::get('/', 'ProjectController@index')->name('project');
    Route::get('/get/all', 'ProjectController@getAll')->name('project.get.all');
});