<?php
    Route::controller('auth', '\App\Http\Controllers\Auth\AuthController');


Route::group([ 'middleware' => ['web']], function () {


    Route::get('/', function () {
        return view('auth');
    });
    Route::post('tools/Favourite_add','\App\Http\Controllers\FavouriteController@postFavourite_add');
    Route::get('password/reset','\App\Http\Controllers\Auth\PasswordController@getReset');
});


    //Route::post('password/reset','\App\Http\Controllers\Auth\PasswordController@postReset');

     Route::post('password/validate_username','\App\Http\Controllers\Auth\PasswordController@validate_username');
     Route::post('password/sendsms','\App\Http\Controllers\Auth\PasswordController@sendsms');
     Route::post('password/reset_password','\App\Http\Controllers\Auth\PasswordController@postreset_password');

   // Route::post('password/reset','\App\Http\Controllers\Auth\PasswordController@postReset');

//    Route::post('password/reset','\App\Http\Controllers\Auth\PasswordController@postReset');
    // xxx.com/property
    Route::get('property', '\App\Http\Controllers\PropertyController@index');
    Route::get('property/{sn}', '\App\Http\Controllers\PropertyController@show');

    Route::get('tour', '\App\Http\Controllers\TourController@index');
//    Route::post('tour', '\App\Http\Controllers\RegisterController@postUser_Register');
    Route::get('tour/{id}', '\App\Http\Controllers\TourController@show');

    Route::get('tour/{id}', '\App\Http\Controllers\TourController@order');

    Route::get('news', '\App\Http\Controllers\ArticleController@index');
    Route::get('news/{id}', '\App\Http\Controllers\ArticleController@show');


	Route::get('study', '\App\Http\Controllers\StudyController@index');
	Route::get('study/{id}', '\App\Http\Controllers\StudyController@show');

    Route::get('register', '\App\Http\Controllers\RegisterController@index');
    Route::post('register', '\App\Http\Controllers\RegisterController@postUser_Register');
    Route::post('register/sendsms','\App\Http\Controllers\RegisterController@sendsms');
    Route::post('register/validate_username','\App\Http\Controllers\RegisterController@validate_username');
    Route::post('register/validate_mobile','\App\Http\Controllers\RegisterController@validate_mobile');



Route::get('debug', function(){

  // return auth()->user();
//
//Route::get('debug', function(){
//   //  phpinfo();
//    $user = \App\User::find(1);
//    \Auth::login($user);
//    return 'ok';
//
//    $properties = \App\Models\Property::first();
//    return $properties->regions->name;
});


