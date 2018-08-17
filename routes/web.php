<?php
Route::get('kursus/excel', 'KursusController@excel');
Route::get('kursus/listing', 'KursusController@listing');
Route::post('kursus/listing', 'KursusController@listing');
Route::get('kursus/add', 'KursusController@add');
Route::get('kursus/delete/{id}', 'KursusController@delete');
Route::get('kursus/edit/{id}', 'KursusController@edit');
Route::post('kursus/save', 'KursusController@save');

Route::get('/', function () {
    return view('welcome');
});

