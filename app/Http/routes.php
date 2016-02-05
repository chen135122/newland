<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('property', '\App\Http\Controllers\PropertyController@index');
    Route::get('property/{sn}', '\App\Http\Controllers\PropertyController@show');

    Route::get('tour', '\App\Http\Controllers\TourController@index');
    Route::get('tour/{sn}', '\App\Http\Controllers\TourController@show');
});

Route::get('debug', function(){
    $properties = \App\Models\Property::first();
    return $properties->regions->name;
});
