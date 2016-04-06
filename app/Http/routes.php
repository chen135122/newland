<?php

Route::controller('auth', '\App\Http\Controllers\Auth\AuthController');

Route::group([ 'middleware' => ['web', 'auth']], function () {
    Route::get('auth/logout','\App\Http\Controllers\Auth\AuthController@Logout');
    Route::get('percenter','\App\Http\Controllers\PercenterController@index');
    Route::post('tools/Favourite_minus','\App\Http\Controllers\FavouriteController@postFavourite_minus');
    Route::post('edit','\App\Http\Controllers\PercenterController@edit');
//    Route::post('tools/Favourite_add', '\App\Http\Controllers\FavouriteController@postFavourite_add');
    //支付宝支付处理
    Route::post('pay','AlipayController@pay');
    //微信支付处理
    Route::get('wpay','\App\Http\Controllers\AlipayController@wpay');
    Route::get('topay/{id}','\App\Http\Controllers\AlipayController@topay');
//    Route::get('xxx', function(){
//        return (auth()->user());
//    });
});

Route::group([ 'middleware' => ['web']], function () {
//    Route::post('/auth/login','\App\Http\Controllers\Auth\AuthController@postLogin');
    Route::post('tools/Favourite_add','\App\Http\Controllers\FavouriteController@postFavourite_add');

    Route::get('/',   '\App\Http\Controllers\HomeController@index');
    Route::get('faq', '\App\Http\Controllers\HomeController@faq');
    Route::get('about', '\App\Http\Controllers\HomeController@about');
    Route::get('password/reset','\App\Http\Controllers\Auth\PasswordController@getReset');

     Route::post('password/validate_username','\App\Http\Controllers\Auth\PasswordController@validate_username');
     Route::post('password/sendsms','\App\Http\Controllers\Auth\PasswordController@sendsms');
     Route::post('password/reset_password','\App\Http\Controllers\Auth\PasswordController@postreset_password');

    Route::get('property', '\App\Http\Controllers\PropertyController@index');
    Route::get('property/{id}', '\App\Http\Controllers\PropertyController@show');

    Route::get('tour', '\App\Http\Controllers\TourController@index');
    Route::get('tour/{id}', '\App\Http\Controllers\TourController@show');
    Route::get('order', '\App\Http\Controllers\TourController@order');
    Route::get('result', '\App\Http\Controllers\TourController@result');
    Route::post('spay', '\App\Http\Controllers\TourController@pay');
    Route::post('create', '\App\Http\Controllers\TourController@create');
    Route::get('tprint/{id}', '\App\Http\Controllers\TourController@tprint');



    Route::get('news', '\App\Http\Controllers\ArticleController@index');
    Route::get('news-{type}', '\App\Http\Controllers\ArticleController@index_type');
    Route::get('news/{id}', '\App\Http\Controllers\ArticleController@show');

    Route::get('study', '\App\Http\Controllers\StudyController@index');
	Route::get('study/{id}', '\App\Http\Controllers\StudyController@show');

    Route::get('study-sp', '\App\Http\Controllers\StudyController@index_sp');
    Route::get('study-sp/{id}', '\App\Http\Controllers\StudyController@show_sp');

    Route::get('register', '\App\Http\Controllers\RegisterController@index');
    Route::post('register', '\App\Http\Controllers\RegisterController@postUser_Register');
    Route::post('register/sendsms','\App\Http\Controllers\RegisterController@sendsms');
    Route::post('register/validate_mobile','\App\Http\Controllers\RegisterController@validate_mobile');


    //支付后跳转页面

    Route::post('result','AlipayController@result');

    Route::get('initialize','\App\Http\Controllers\AlipayController@initialize');
    Route::get('qrcode','\App\Http\Controllers\AlipayController@qrcode');
    Route::get('notify','\App\Http\Controllers\AlipayController@notify');
    Route::get('wem','\App\Http\Controllers\AlipayController@wem');
    Route::get('query','\App\Http\Controllers\AlipayController@query');
});
Route::get('debug', function(){
  return 16;
});



