<?php
Route::get('kursus/listing', 'KursusController@listing');

Route::get('/', function () {
    return view('welcome');
});

