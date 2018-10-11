<?php

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('home');
Route::get('contact', 'WebsiteController@contact')->name('contact');
Route::post('contact', 'WebsiteController@sendContact')->name('send_contact');
