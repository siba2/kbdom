<?php

Auth::routes();

Route::get('/', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::prefix('/project')->middleware('auth')->group(function () {
    Route::get('/', 'ProjectController@index')->name('project');
    Route::get('/get/all', 'ProjectController@getAll')->name('project.get.all');
});

Route::prefix('/employee')->middleware('auth')->group(function () {
    Route::get('/', 'EmployeeController@index')->name('employee');
    Route::get('/get/all', 'EmployeeController@getAll')->name('employee.get.all');
});
