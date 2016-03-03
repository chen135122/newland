<?php
    Route::controller('auth', '\App\Http\Controllers\Auth\AuthController');
    Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('home');
    });
    // xxx.com/property
    Route::get('property', '\App\Http\Controllers\PropertyController@index');
    Route::get('property/{sn}', '\App\Http\Controllers\PropertyController@show');

    Route::get('tour', '\App\Http\Controllers\TourController@index');
    Route::get('tour/{sn}', '\App\Http\Controllers\TourController@show');

    Route::get('register', '\App\Http\Controllers\RegisterController@index');
    Route::post('register', '\App\Http\Controllers\RegisterController@postUser_Register');
    Route::post('register/sendsms','\App\Http\Controllers\RegisterController@sendsms');
    Route::post('register/validate_username','\App\Http\Controllers\RegisterController@validate_username');

});

Route::get('debug', function(){
   //  phpinfo();
    $properties = \App\Models\Property::first();
    return $properties->regions->name;
});
