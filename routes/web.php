<?php

Route::get('/', function () {
    return redirect()->route('generate.index');
});

Route::Resource('generate', 'RSGController');

Route::get('get', 'RSGController@getAllJSON')->name('getAll');
Route::get('getby/{id}', 'RSGController@getJSON')->name('getById');
