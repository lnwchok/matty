<?php

// use Excel;
use App\Bqproc;
use App\Info;



Route::get('/', function () {
    return view('index');
});

Route::get('bqreqs', 'BqreqsController@index');

Route::get('bqprocs', 'BqprocsController@index');
Route::get('bqprocs/import', 'BqprocsController@importExcel');


Route::get('excels', 'ExcelsController@index');
Route::get('excels/import', 'ExcelsController@importExcel');
