<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('property', '\App\Http\Controllers\PropertyController@index');
    Route::get('property/{sn}', '\App\Http\Controllers\PropertyController@show');
});

Route::get('debug', function(){
    $properties = \App\Models\Property::first();
    return $properties->regions->name;
});
