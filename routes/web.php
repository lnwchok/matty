<?php

// Home
Route::get('/', function () {
    return view('index');
});


// Section >> BQ Required

Route::get('bqreqs', 'BqreqsController@index');


// Section >> BQ Procurement
Route::get('bqprocs', 'BqprocsController@index');
Route::get('bqprocs/import', 'BqprocsController@importExcel');

// Section >> Matl Balance
Route::get('balance', 'BqbalsController@index');


Route::get('excels', 'ExcelsController@index');
Route::get('excels/import', 'ExcelsController@importExcel');
