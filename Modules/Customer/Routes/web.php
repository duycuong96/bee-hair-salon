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
    Route::post('dang-nhap', 'LoginController@login')->name('login');
    Route::post('dang-xuat', 'LoginController@logout')->name('logout');
    Route::get('quen-mat-khau', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset.showForm');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('send.link.email');
    Route::get('mat-khau/dat-lai/{token}', 'ResetPasswordController@showResetForm')->name('password.showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    Route::get('dang-ky', 'RegisterController@showRegistrationForm')->name('formRegister');
    Route::post('dang-ky', 'RegisterController@register')->name('register');

});

Route::group([
    'prefix' => '',
    'as' => 'customer.',
], function () {
    Route::get('dang-ky/xac-nhan/{token}', 'RegisterController@showConfirmForm')->name('confirmForm');
    Route::post('dang-ky/xac-nhan', 'RegisterController@confirm')->name('confirm');
    Route::get('', 'HomeController@index')->name('home');
    Route::resource('lien-he', 'ContactController')->only('index', 'store');
    Route::get('ve-chung-toi', 'AboutController@index')->name('about');
    // Route::get('thu-vien', 'GalleryController@index');
    Route::resource('salon', 'BranchSalonController')->only('show');
    Route::resource('dich-vu', 'ServiceController');
    Route::get('danh-sach-salon', 'BranchSalonController@index')->name('branchSalon.index');
    Route::get('bai-viet', 'PostController@listPost')->name('post.list');
    Route::get('bai-viet/{slug}', 'PostController@detailPost')->name('post.detail');
    // Route::get('chuyen-muc/{id}', 'PostController@categoryPost')->name('post.category');
    Route::post('binh-luan-bai-viet/{slug}', 'PostController@sendComment')->name('post.comment');

});
Route::group([
    'prefix' => '',
    'as' => 'customer.',
    'middleware' => [ 'Assign.guard:customer', 'customer.status'],
], function () {
    Route::get('tai-khoan', 'ProfileController@index')->name('tai-khoan.index');
    Route::put('tai-khoan/{id}', 'ProfileController@update')->name('tai-khoan.update');
    Route::get('tai-khoan/doi-mat-khau', 'ProfileController@changePassword')->name('tai-khoan.forgotPassword');
    Route::get('dat-lich', 'BookingController@booking')->name('booking');
    Route::post('dat-lich', 'BookingController@bookingSchedule')->name('bookingSchedule');
    // Route::get('tai-khoan/so-du', 'ProfileController@surplus')->name('profile.surplus');
    // Route::get('tai-khoan/thong-bao', 'ProfileController@notification')->name('profile.notification');
    Route::get('tai-khoan/lich-su&danh-gia', 'ProfileController@history')->name('profile.history');
});

