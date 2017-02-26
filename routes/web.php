<?php

// Home
Route::get('/', 'IndexsController@index');


// Section >> BQ Required

Route::get('bqreqs', 'BqreqsController@index');


// Section >> BQ Procurement
Route::get('bqprocs', 'BqprocsController@index');
Route::get('bqprocs/import', 'BqprocsController@importExcel');

// Section >> Matl Balance
Route::get('balance', 'BqbalsController@index')->name('balance');
Route::get('balance/shortage', 'BqbalsController@shortageItem');
Route::get('balance/over', 'BqbalsController@overItem');



Route::get('excels', 'ExcelsController@index');
Route::get('excels/import', 'ExcelsController@importExcel');
