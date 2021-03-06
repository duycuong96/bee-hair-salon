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
    'middleware' => [ 'Assign.guard:admin', 'admin.status' ],
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
    Route::get('salon-list-khach-hang/{id}', 'BranchSalonController@salonListCustomer')->name('salon.salonListCustomer');
    Route::get('salon-lich-su-cua-khach-hang/{id}', 'BranchSalonController@customerHisstory')->name('salon.customerHisstory');
    Route::get('salon-danh-sach-danh-gia/{id}', 'BranchSalonController@salonListReview')->name('salon.salonListReview');


    // page curd review
    Route::resource('danh-gia', 'ReviewController')->except('create', 'store', 'edit');
    Route::get('danh-gia-lich-su-xoa', 'ReviewController@listSoftDelete')->name('danh-gia.listSoftDelete');
    Route::get('danh-gia/khoi-phuc/{id}', 'ReviewController@restore')->name('danh-gia.restore');
    // page curd service
    Route::resource('dich-vu', 'ServiceController')->except('edit');
    Route::get('them-salon-dich-vu/{id}', 'ServiceController@createServiceSalon')->name('salon.createSalon');
    Route::resource('dich-vu-salon', 'SalonServiceController')->except('create', 'edit');
    Route::get('dich-vu-lich-su-xoa', 'ServiceController@listSoftDelete')->name('dich-vu.listSoftDelete');
    Route::get('dich-vu/khoi-phuc/{id}', 'ServiceController@restore')->name('dich-vu.restore');
    Route::get('dich-vu-salon/dang-ky/{id}', 'SalonServiceController@registerService')->name('dich-vu-salon.registerService');
    Route::get('dich-vu-salon/update/{id}', 'SalonServiceController@updateSalon')->name('dich-vu-salon.updateSalon');
    Route::put('dich-vu-salon/update/{id}', 'SalonServiceController@putUpdateSalon')->name('dich-vu-salon.putUpdateSalon');
    // Route::post('validate', 'CustomerController@validateData')->name('khach-hang.validate');
    // page curd account
    Route::resource('tai-khoan', 'AccountController');
    Route::get('danh-sach-salon-cua-ban', 'AccountController@salonListOfMe')->name('tai-khoan.salonListOfMe');
    // page role and permission
    Route::resource('phan-quyen', 'PermissionController');
    Route::resource('vai-tro', 'RoleController');
    // page curd contact
    Route::resource('lien-he', 'ContactController')->only('index', 'show', 'update');
    // page curd banner
    Route::resource('banner', 'BannerController');
    Route::get('banner-lich-su-xoa', 'BannerController@listSoftDelete')->name('banner.listSoftDelete');
    Route::get('banner/khoi-phuc/{id}', 'BannerController@restore')->name('banner.restore');
    // page curd post
    Route::resource('bai-viet', 'PostController');
    Route::get('bai-viet-thung-rac', 'PostController@listSoftDelete')->name('bai-viet.listSoftDelete');
    Route::get('bai-viet/khoi-phuc/{id}', 'PostController@restore')->name('bai-viet.restore');
    // page curd category
    Route::resource('chuyen-muc', 'CategoryController');
    Route::get('chuyen-muc-thung-rac', 'CategoryController@listSoftDelete')->name('chuyen-muc.listSoftDelete');
    Route::get('chuyen-muc/khoi-phuc/{id}', 'CategoryController@restore')->name('chuyen-muc.restore');
    // page curd comment
    Route::resource('binh-luan', 'CommentController');
    Route::get('binh-luan-thung-rac', 'CommentController@listSoftDelete')->name('binh-luan.listSoftDelete');
    Route::get('binh-luan/khoi-phuc/{id}', 'CommentController@restore')->name('binh-luan.restore');
    // Page Thống kê
    Route::get('thong-ke/khach-hang', 'StatisticController@customer')->name('thong-ke.khach.hang');
    Route::get('thong-ke/doanh-thu', 'StatisticController@revenue')->name('thong-ke.doanh-thu');
    Route::get('thong-ke/dich-vu', 'StatisticController@service')->name('thong-ke.dich-vu');
    Route::get('thong-ke/don-hang', 'StatisticController@order')->name('thong-ke.don-hang');
    Route::get('thong-ke/doanh-thu/salon/{id}', 'StatisticController@revenueSalon')->name('thong-ke.dich-vu.salon');
    // thời gian biểu
    Route::resource('thoi-gian-bieu', 'TimeScheduleController');
    // Page xác nhận đơn hàng: staff
    Route::get('don-hang-xac-nhan', 'OrderController@confirmOrder')->name('order.confirm_order');
    Route::get('don-hang-lich-su', 'OrderController@history')->name('order.history');
    Route::resource('don-hang', 'OrderController')->except('edit');
    Route::get('don-hang-dich-vu-da-xoa/{id}', 'OrderController@listSoftDelete')->name('don-hang.listSoftDelete');
    Route::get('don-hang/khoi-phuc/{id}', 'OrderController@restore')->name('don-hang.restore');
    Route::get('order-update-status', 'OrderController@updateStatus')->name('don-hang.updateStatus');
});


