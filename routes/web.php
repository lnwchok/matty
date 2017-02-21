<?php

// use Excel;
use App\Bqproc;
use App\Info;



Route::get('/', function () {

    return view('index');
});

Route::get('bqreqs', 'BqreqsController@index');

Route::get('bqprocs', 'BqprocsController@index');


Route::get('excels', 'ExcelsController@index');
// Route::get('excels', ['as' => 'excels', 'uses' => 'ExcelsController@index']);

Route::get('excels/import', 'ExcelsController@importExcel');

/*Route::get('excels', function () {

	$path = '/home/sitthichok/Desktop/test.xls';

	$dat = Excel::selectSheets(0)->load($path)->get(array());
	return view('test', compact('dat'));
});*/