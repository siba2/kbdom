<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/home/employee/update', 'HomeController@updateEmployee')->name('home.update.employee');


//TODO: dodać ->middleware('auth')

Route::prefix('/assortment')->group(function () {
    Route::get('/', 'AssortmentCoreController@index')->name('assortment');
    Route::get('/create', 'AssortmentCoreController@create')->name('assortment.create');
    Route::get('/edit/{id}', 'AssortmentCoreController@edit')->name('assortment.edit');
    Route::get('/get/all', 'AssortmentCoreController@getAll')->name('assortment.get.all');
    Route::post('/store', 'AssortmentCoreController@store')->name('assortment.store');
    Route::post('/update/{id}', 'AssortmentCoreController@update')->name('assortment.update');
    Route::get('/delete/{id}', 'AssortmentCoreController@delete')->name('assortment.delete');
});

Route::prefix('/contractor')->group(function () {
    Route::get('/', 'ContractorController@index')->name('contractor');
    Route::get('/create', 'ContractorController@create')->name('contractor.create');
    Route::get('/edit/{id}', 'ContractorController@edit')->name('contractor.edit');
    Route::get('/get/all', 'ContractorController@getAll')->name('contractor.get.all');
    Route::post('/store', 'ContractorController@store')->name('contractor.store');
    Route::post('/update/{id}', 'ContractorController@update')->name('contractor.update');
    Route::get('/delete/{id}', 'ContractorController@delete')->name('contractor.delete');
});

Route::prefix('/schedule')->group(function () {
    Route::get('/', 'ScheduleController@index')->name('schedule');
    Route::get('/day', 'ScheduleController@day')->name('schedule.day');
    Route::get('/week', 'ScheduleController@week')->name('schedule.week');
});
