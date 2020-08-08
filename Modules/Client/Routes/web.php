<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
// Route::group(['namespace' => 'Auth'], function () {
//     Route::get('login', 'LoginController@showLoginForm');
//     Route::post('login', 'logincontroller@login')->name('admin.login');
//     Route::post('logout', 'logincontroller@logout')->name('admin.logout');
// });


Route::group(['prefix' => ''], function () {
    Route::get('', 'HomeController@index');
    Route::get('lien-he', 'ContactController@index');
    Route::get('ve-chung-toi', 'AboutController@index');
    Route::get('thu-vien', 'GalleryController@index');
    Route::get('chi-tiet-salon', 'SingleController@index');
    Route::get('dich-vu', 'ServiceController@index');
});
