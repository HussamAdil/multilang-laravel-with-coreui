<?php
 

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        // write all your routes Here :) 

        Route::get('/', function () {return view('welcome'); });

        Route::get('home', 'HomeController@index')->name('home');

        Route::get('/about', function () {return view('about'); });


    });




    Auth::routes();

