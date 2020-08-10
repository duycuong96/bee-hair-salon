<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login')->name('admin.login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('khach-hang', 'CustomerController');
    Route::resource('salon', 'BranchSalonController');
    Route::get('them-dich-vu-salon/{id}', 'BranchSalonController@createSalonService')->name('salon.createService');
    Route::resource('danh-gia', 'ReviewController')->only('index', 'show', 'update');
    Route::resource('dich-vu', 'ServiceController')->except('edit');
    Route::get('them-salon-dich-vu/{id}', 'ServiceController@createServiceSalon')->name('salon.createSalon');
    Route::resource('dich-vu-salon', 'SalonServiceController')->except('edit');
    Route::post('validate', 'CustomerController@validateData')->name('khach-hang.validate');
    Route::resource('tai-khoan', 'UserController');
});
