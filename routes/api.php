<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::post('signin', 'SignInController');
    Route::get('me', 'MeController');
    Route::post('signout', 'SignOutController');
});

Route::group(['prefix' => 'snippets', 'namespace' => 'Snippets'], function () {
    Route::post('', 'SnippetController@store');
    Route::get('{snippet:uuid}', 'SnippetController@show');
});
