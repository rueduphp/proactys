<?php

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('home');
