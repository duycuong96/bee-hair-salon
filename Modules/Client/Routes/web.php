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
    // Route::get('', 'HomeController@index');
    // Route::get('lien-he', 'ContactController@index');
    Route::get('ve-chung-toi', 'AboutController@index');
    Route::get('thu-vien', 'GalleryController@index');
    // Route::get('chi-tiet-salon', 'SingleController@index');
    // Route::get('dicgh-vu', 'ServiceController@index');
    // Route::get('tai-khoan', 'ProfileController@index');
    // Route::get('tai-khoan/cap-nhat', 'ProfileController@updateProfile')->name('profile.update');
    // Route::get('tai-khoan/doi-mat-khau', 'ProfileController@changePassword')->name('profile.password');
    // Route::get('tai-khoan/so-du', 'ProfileController@surplus')->name('profile.surplus');
    // Route::get('tai-khoan/thong-bao', 'ProfileController@notification')->name('profile.notification');
    // Route::get('tai-khoan/lich-su&danh-gia', 'ProfileController@history')->name('profile.history');
    Route::get('dat-lich', 'BookingController@index');
});
