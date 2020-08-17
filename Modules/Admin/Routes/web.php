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
    Route::post('logout', 'LoginController@logout')->name('logout');
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
    // page dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');
    // page setting account
    Route::get('cap-nhat-tai-khoan', 'AccountController@formSettingAccount')->name('setting.account');
    Route::post('cap-nhat-tai-khoan', 'AccountController@settingAccount')->name('submit.setting.account');
    // page change password
    Route::get('doi-mat-khau', 'AccountController@formChangePassword')->name('change.password.account');
    Route::post('doi-mat-khau', 'AccountController@changePassword')->name('submit.change.password.account');
    // page curd customer
    Route::resource('khach-hang', 'CustomerController');
    // page curd branch salon
    Route::resource('salon', 'BranchSalonController');
    Route::get('them-dich-vu-salon/{id}', 'BranchSalonController@createSalonService')->name('salon.createService');
    // page curd review
    Route::resource('danh-gia', 'ReviewController')->only('index', 'show', 'update');
    // page curd service
    Route::resource('dich-vu', 'ServiceController')->except('edit');
    Route::get('them-salon-dich-vu/{id}', 'ServiceController@createServiceSalon')->name('salon.createSalon');
    Route::resource('dich-vu-salon', 'SalonServiceController')->except('edit');
    // Route::post('validate', 'CustomerController@validateData')->name('khach-hang.validate');
    // page curd account
    Route::resource('tai-khoan', 'AccountController');
    // page role and permission
    Route::resource('phan-quyen', 'PermissionController');
    Route::resource('vai-tro', 'RoleController');
    // page curd contact
    Route::resource('lien-he', 'ContactController')->only('index', 'show', 'update');
    // page curd banner
    Route::resource('banner', 'BannerController');
    // page curd post
    Route::resource('bai-viet', 'PostController');
    // page curd category
    Route::resource('chuyen-muc', 'CategoryController');
    // page curd comment
    Route::resource('binh-luan', 'CommentController');
    // Page Thống kê
    Route::get('thong-ke/khach-hang', 'StatisticController@customer')->name('thong-ke.khach.hang');
    Route::get('thong-ke/doanh-thu', 'StatisticController@revenue')->name('thong-ke.doanh-thu');
    Route::get('thong-ke/dịch-vụ', 'StatisticController@service')->name('thong-ke.dich-vu');
    // Page xác nhận đơn hàng: staff
    Route::get('xac-nhan-don-hang', 'OrderController@confirmOrder')->name('confirm_order');
});


