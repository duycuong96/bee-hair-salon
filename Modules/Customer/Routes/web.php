<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'customer',
    'namespace' => 'Auth',
    'as' => 'customer.',
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('formLogin');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
    Route::get('forgot-password', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset.showForm');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('send.link.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

});


Route::group([
    'prefix' => '',
    'as' => 'customer.',
    'middleware' => 'Assign.guard:admin',
], function () {
    Route::get('', 'HomeController@index');
    Route::get('lien-he', 'ContactController@index');
    Route::get('ve-chung-toi', 'AboutController@index');
    Route::get('thu-vien', 'GalleryController@index');
    Route::get('chi-tiet-salon', 'BranchSalonController@index');
    Route::get('dich-vu', 'ServiceController@index');
});
