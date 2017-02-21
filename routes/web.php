<?php

// use Excel;

Route::get('/', function () {

    return view('index');
});

Route::get('/bqreqs', 'BqreqsController@index');

Route::get('/excels', function () {

	$path = '/home/mps0229/Desktop/test.xls';

	$data = Excel::load($path, function($reader) {
		$sheet = $reader->sheet(0);
		$result = $sheet->get(array('a1','b1'));

	 })->get();

	// $title = $data->getTitle();

	// $data->dd();

	return var_dump($result);

	// return view('test', compact('data'));
});

