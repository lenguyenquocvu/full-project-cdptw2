<?php 

Route::get('/student/submit-up', 'Fteam\Topic\Controllers\TopicController@index');
Route::post('/student/submit-up', 'Fteam\Topic\Controllers\TopicController@upload')->name('submit-up');


Route::get('/student/submit-down', 'Fteam\Topic\Controllers\TopicController@getfile');
