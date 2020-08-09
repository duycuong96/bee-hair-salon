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
    Route::post('validate', 'CustomerController@validateData')->name('khach-hang.validate');
    Route::resource('salon', 'BranchSalonController');
    Route::resource('tai-khoan', 'UserController');
    Route::resource('phan-quyen', 'PermissionController');
    Route::resource('vai-tro', 'RoleController');
});
