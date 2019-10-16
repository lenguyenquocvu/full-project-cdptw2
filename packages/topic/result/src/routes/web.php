<?php

Route::group(['namespace' => 'Topic\Result\Http\Controllers'], function() {
    //
    Route::get('login', 'LoginController@index');
    //
    Route::resource('members', 'MembersController');
    //   
    Route::resource('submit', 'SubmitController');
    //
    Route::resource('admin', 'AdminController');
    
    Route::resource('teacher', 'TeacherController');
    
    Route::get('test-add-account', 'MembersController@store');
    Route::get('test-update-account', 'MembersController@update');
});