<?php



Route::get('/', function () {

    return view('index');
});

Route::get('/bqreqs', 'BqreqsController@index');



