<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::prefix('/assortment')->middleware('auth')->group(function () {
    Route::get('/', 'AssortmentController@index')->name('assortment');
    Route::get('/get/all', 'AssortmentController@getAll')->name('assortment.get.all');
});

Route::prefix('/contractor')->middleware('auth')->group(function () {
    Route::get('/', 'ContractorController@index')->name('contractor');
    Route::get('/get/all', 'ContractorController@getAll')->name('contractor.get.all');
});

Route::prefix('/schedule')->middleware('auth')->group(function () {
    Route::get('/', 'ScheduleController@index')->name('schedule');
    Route::get('/day', 'ScheduleController@index')->name('schedule.day');
    Route::get('/week', 'ScheduleController@index')->name('schedule.week');
    Route::get('/get/all', 'ScheduleController@getAll')->name('schedule.get.all');
});
