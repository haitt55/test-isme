<?php

// Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'admin.auth.getLogin']);
    Route::post('auth/login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'admin.auth.postLogin']);
    Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'admin.auth.getLogout']);

    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin.home.index']);
        Route::get('dashboard', ['uses' => 'HomeController@index', 'as' => 'admin.home.dashboard']);

        Route::get('profile/edit', ['uses' => 'ProfileController@edit', 'as' => 'admin.profile.edit']);
        Route::put('profile/update', ['uses' => 'ProfileController@update', 'as' => 'admin.profile.update']);
        Route::get('profile/editPassword', ['uses' => 'ProfileController@editPassword', 'as' => 'admin.profile.editPassword']);
        Route::put('profile/updatePassword', ['uses' => 'ProfileController@updatePassword', 'as' => 'admin.profile.updatePassword']);

        Route::resource('users', 'UsersController');
        Route::resource('pages', 'PagesController');
        Route::resource('articles', 'ArticlesController');
        Route::resource('contacts', 'ContactsController', ['only' => ['index', 'show', 'destroy']]);

        Route::get('settings/general', ['uses' => 'SettingsController@general', 'as' => 'admin.settings.general']);
        Route::put('settings/general', ['uses' => 'SettingsController@updateGeneral', 'as' => 'admin.settings.updateGeneral']);
    });
});

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);