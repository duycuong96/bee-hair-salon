<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Auth',
    'as' => 'admin.',
], function () {
    Route::get('dang-nhap', 'LoginController@showLoginForm')->name('formLogin');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
    Route::get('quen-mat-khau', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset.showForm');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('send.link.email');
    Route::get('mat-khau/dat-lai/{token}', 'ResetPasswordController@showResetForm')->name('password.showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'Assign.guard:admin',
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('khach-hang', 'CustomerController');
    Route::resource('salon', 'BranchSalonController');
    Route::get('them-dich-vu-salon/{id}', 'BranchSalonController@createSalonService')->name('salon.createService');
    Route::resource('danh-gia', 'ReviewController')->only('index', 'show', 'update');
    Route::resource('dich-vu', 'ServiceController')->except('edit');
    Route::get('them-salon-dich-vu/{id}', 'ServiceController@createServiceSalon')->name('salon.createSalon');
    Route::resource('dich-vu-salon', 'SalonServiceController')->except('edit');
    // Route::post('validate', 'CustomerController@validateData')->name('khach-hang.validate');
    Route::resource('tai-khoan', 'AccountController');
    Route::resource('phan-quyen', 'PermissionController');
    Route::resource('vai-tro', 'RoleController');
    Route::resource('lien-he', 'ContactController')->only('index', 'show', 'update');

    Route::resource('banner', 'BannerController');
    Route::resource('bai-viet', 'PostController');
    Route::resource('chuyen-muc', 'CategoryController');
    Route::resource('binh-luan', 'CommentController');
});
