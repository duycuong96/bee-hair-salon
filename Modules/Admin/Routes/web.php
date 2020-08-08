<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
// Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function () {
//     Route::get('login', 'LoginController@showLoginForm');
//     Route::post('login', 'LoginController@login')->name('admin.login');
//     Route::post('logout', 'LoginController@logout')->name('admin.logout');
// });

Route::group([
    'prefix' => 'admin',
    'as'         => 'admin.'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('khach-hang', 'CustomerController');
    Route::resource('salon', 'BranchSalonController');
});
