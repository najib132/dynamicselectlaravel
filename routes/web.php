<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('dropdownlist','DropdownController@index');
Route::get('get-state-list','DropdownController@getStateList');
Route::get('get-city-list','DropdownController@getCityList'); 



?>