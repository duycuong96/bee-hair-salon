<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'khach-hang',
    'namespace' => 'Auth',
    'as' => 'customer.',
], function () {
    Route::get('dang-nhap', 'LoginController@showLoginForm')->name('formLogin');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
    Route::get('quen-mat-khau', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset.showForm');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('send.link.email');
    Route::get('mat-khau/dat-lai/{token}', 'ResetPasswordController@showResetForm')->name('password.showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    Route::get('dang-ky', 'RegisterController@showRegistrationForm')->name('formRegister');
    Route::post('register', 'RegisterController@register')->name('register');
});


Route::group([
    'prefix' => '',
    'as' => 'customer.',
], function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::resource('lien-he', 'ContactController')->only('index', 'store');
    Route::get('ve-chung-toi', 'AboutController@index');
    // Route::get('thu-vien', 'GalleryController@index');
    Route::resource('salon', 'BranchSalonController')->only('show');
    Route::resource('dich-vu', 'ServiceController');
});
Route::group([
    'prefix' => '',
    'as' => 'customer.',
    'middleware' => 'Assign.guard:customer',
], function () {
    Route::get('tai-khoan', 'ProfileController@index')->name('tai-khoan.index');
    Route::put('tai-khoan/{id}', 'ProfileController@update')->name('tai-khoan.update');
    Route::get('tai-khoan/doi-mat-khau', 'ProfileController@changePassword')->name('tai-khoan.forgotPassword');
    // Route::get('tai-khoan/so-du', 'ProfileController@surplus')->name('profile.surplus');
    // Route::get('tai-khoan/thong-bao', 'ProfileController@notification')->name('profile.notification');
    // Route::get('tai-khoan/lich-su&danh-gia', 'ProfileController@history')->name('profile.history');
});

