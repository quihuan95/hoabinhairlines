<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Fontend
Route::get('/', 'HomeController@index');
//Route::get('/trang-chu', 'HomeController@index2');
Route::get('/trang-demo', 'HomeController@trang_demo');
Route::get('/ve-vietnam-airlines', 'HomeController@ve_vietnam_airlines');
Route::get('/ve-vietjet-air', 'HomeController@ve_vietjetair');
Route::get('/ve-vietjetair', 'HomeController@ve_vietjetair');
Route::get('/ve-bamboo-airways', 'HomeController@ve_bamboo_airways');
Route::get('/ve-may-bay-gia-re', 'HomeController@ve_may_bay_gia_re');
Route::post('email-promotion', 'HomeController@email_promotion')->name('email.promotion');
Route::get('/uploads-file', 'HomeController@upload_files')->name('uploads.file');
Route::post('/tour/book', 'HomeController@book_tour')->name('book.tour');
Route::get('/flight_data2', 'HomeController@flight_data')->name('flight.data');
Route::post('search/name', 'HomeController@getSearchAjax')->name('search');
Route::post('search_locals', 'HomeController@search_locals')->name('search.local');
Route::post('/payments', 'HomeController@payments')->name('pay.local');
Route::get('/admin', 'AdminController@index');
Route::get('/phan-hoi-thanh-toan/{orderid}', 'HomeController@phan_hoi_thanh_toan')->name('phanhoi.thanhtoan');
//Route::get('/contact', 'HomeController@contact');
//Route::get('/lien-he', 'HomeController@contact');
Route::get('/gioi-thieu', 'HomeController@about_us');
//Route::get('/tin-tuc', 'NewsController@index');
Route::get('/tours', 'ToursController@index');
Route::get('/flight', 'HomeController@flight');
Route::get('/flight_data', 'HomeController@flight_data');
//Route::get('/sitemap.xml', 'SitemapController@index');
//Route::get('/ajax-content/{crew_id}', 'HomeController@ajax_content');
Route::get('/thanh-toan', 'HomeController@thanh_toan');
Route::get('/thanh-toan-qua-vi-vnpay', 'HomeController@thanh_toan_qua_vi_vnpay');
Route::get('/vnpay-ipn', 'HomeController@vnpay_ipn')->name('vnpay.ipn');
Route::get('/dr', 'HomeController@dr_post')->name('dr.post');
Route::get('/confirm/{orderinfo}', 'HomeController@registration_confirm')->name('registration.confirm');
Route::get('/confirm-momo-pay/{orderinfo}', 'HomeController@registration_confirm_momo_pay')->name('registration.confirm.momo');
Route::get('/confirm-vnpay', 'HomeController@registration_confirm_vnpay')->name('registration.confirm.vnpay');
Route::get('/kiem-tra-don-hang', 'HomeController@kiem_tra_don_hang');
Route::post('/payment-momo', 'HomeController@payment_momo')->name('payment.momo');
Route::post('/payment-vnpay', 'HomeController@payment_vnpay')->name('payment.vnpay');

Route::get('/cam-nang-bay', 'NewsController@cam_nang_bay');
Route::get('/danh-muc-tin/cam-nang-bay', 'NewsController@danh_muc_cam_nang_bay');
Route::get('/tin-khuyen-mai', 'NewsController@tin_khuyen_mai');
//begin edit date 27/06/2022
Route::get('/ve-may-bay-gia-re-hoa-binh-airlines.html', 'HomeController@ve_may_bay_gia_re_hoa_binh_airlines');
Route::get('/dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines.html', 'HomeController@datvemaybaygiaretaihba');
Route::get('/dat-mua-ve-bamboo-airways-gia-cuc-re-tai-hoa-binh-airlines.html', 'HomeController@datmuavebambooairwaysgiacucretaihba');
Route::get('ve-vietjet-air-gia-re-hoa-binh-airlines.html', 'HomeController@vevietjetairgiarehba');
//end date ngày 27/06/2022
Route::get('/tour/{slug}', 'ToursController@tour_detail');
Route::post('login-process', 'HomeController@login_process');
Route::get('ve-may-bay/{slug}', 'HomeController@vemaybay');
Route::get('ve-may-bay-gia-re/{slug}.html', 'HomeController@vemaybaygiare')->name('vemaybay.gia.re');
//tuan edit
Route::get('ve-vietnam-airlines/{slug}.html', 'HomeController@vevietnamairline')->name('vemaybay.vietnamairline');
Route::get('ve-bamboo-airways/{slug}.html', 'HomeController@veBambooAirway')->name('vemaybay.ve-bamboo-airways');
Route::get('ve-vietjet-air/{slug}.html', 'HomeController@veVietjetAir')->name('vemaybay.ve-vietjet-air');
//Pages
Route::get('pages/{slug}', 'HomeController@pages');
Route::get('{slug}', 'NewsController@news_detail');

//Backend
Route::group(['prefix'=>'admin'],function(){
    Route::get('/login', 'AdminController@index');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    Route::get('dashboard', 'AdminController@show_dashboard');
    Route::post('admin-dashboard', 'AdminController@dashboard')->name('admin.dashboard.process');
    Route::get('email/list', 'AdminController@email_list')->name('admin.email.list');
    Route::get('pages/list', 'PagesController@listpages')->name('admin.pages.list');
    Route::get('pages/edit/{id}', 'PagesController@pages_edit')->name("admin.pages.edit");
    Route::get('pages/insert', 'PagesController@insert')->name('admin.pages.insert');
    Route::post('pages/create', 'PagesController@create')->name('admin.pages.create');
    Route::post('pages/update', 'PagesController@update')->name('admin.pages.update');
    Route::get('pages/delete/{id}','PagesController@delete')->name('admin.pages.delete');
    Route::get('news/list', 'NewsController@listmenu')->name('admin.news.list');
    Route::get('news/add', 'NewsController@insert')->name('admin.news.insert');
    Route::get('news/edit/{id}', 'NewsController@news_edit')->name("admin.news.edit");
    Route::post('news/update', 'NewsController@update_news')->name("admin.news.update");
    Route::post('news/create', 'NewsController@create')->name('admin.news.create');
    Route::get('news/active/{id}', 'NewsController@active_atc')->name("admin.news.active.atc");
    Route::get('news/delete/{id}','NewsController@delete')->name('admin.news.delete');

    Route::get('vouchers/insert-code', 'NewsController@insert_code')->name("admin.voucher.insert");
    Route::get('vouchers/select-code', 'NewsController@select_code')->name("admin.voucher.select");

    Route::post('multiuploads','NewsController@uploadSubmit')->name('admin.news.multiuploads');
    Route::get('catnews/list', 'NewsController@ListcatNews')->name('admin.catnews.list');
    Route::get('catnews/add', 'NewsController@ListcatAdd')->name('admin.catnews.add');
    Route::get('catnews/edit/{id}', 'NewsController@CatnewsEdit')->name("admin.catnews.edit");
    Route::post('catnews/create', 'NewsController@catnewscreate')->name('admin.catnews.create');
    Route::post('catnews/update', 'NewsController@catnews_update')->name('admin.catnews.update');
    Route::get('catnews/delete/{id}','NewsController@catnews_delete')->name('admin.catnews.delete');

    Route::get('tours/list', 'ToursController@list')->name('admin.tours.list');
    Route::get('tours/add', 'ToursController@add')->name('admin.tours.add');
    Route::get('tours/edit/{id}', 'ToursController@edit')->name("admin.tours.edit");
    Route::get('tours/create', 'ToursController@create')->name("admin.tours.create");
    Route::get('tours/active/{id}', 'ToursController@active_atc')->name("admin.tours.active.atc");
    Route::post('tours/create', 'ToursController@postcreate')->name('admin.tours.postcreate');
    Route::post('tours/update', 'ToursController@postupdate')->name('admin.tours.postupdate');
    Route::get('tours/delete/{id}','ToursController@delete')->name('admin.tours.delete');
    Route::get('tours/list/customer', 'ToursController@customer_list')->name("admin.tours.customer.list");

    Route::get('catalog/tours/list', 'ToursController@catalog_list')->name('admin.catalog_tours.list');
    Route::get('catalog/tours/add', 'ToursController@catalog_add')->name('admin.catalog_tours.add');
    Route::get('catalog/tours/edit/{id}', 'ToursController@catalog_edit')->name("admin.catalog_tours.edit");
    Route::get('catalog/tours/create', 'ToursController@catalog_create')->name("admin.catalog_tours.create");
    Route::post('catalog/tours/create', 'ToursController@catalog_postcreate')->name('admin.catalog_tours.postcreate');

    Route::get('menu/list', 'MenuController@listmenu')->name('admin.menu.list');
    Route::get('menu/add', 'MenuController@insert')->name('admin.menu.insert');
    Route::get('menu/edit/{id}/{parent_id}', 'MenuController@edit')->name("admin.menu.edit");
    Route::post('menu/update', 'MenuController@update')->name("admin.menu.update");
    Route::post('menu/create', 'MenuController@create')->name('admin.menu.create');
    Route::get('menu/del/{id}', 'MenuController@delete')->name('admin.menu.delete');

    Route::get('countries/list', 'MenuController@listcountries')->name('admin.countries.list');
    Route::get('countries/add', 'MenuController@countries_add')->name('admin.countries.add');
    Route::post('countries/create', 'MenuController@countries_create')->name('admin.countries.create');
    Route::get('countries/del/{id}', 'MenuController@countries_delete')->name('admin.countries.delete');

    Route::get('banner/list', 'BannerController@banner_manage')->name("admin.banner.list");
    Route::get('banner/add', 'BannerController@banner_add')->name("admin.banner.add");
    Route::get('banner/edit/{id}', 'BannerController@banner_edit')->name("admin.banner.edit");
    Route::post('banner/create', 'BannerController@postcreate')->name('admin.banner.postcreate');
    Route::post('banner/update', 'BannerController@postupdate')->name('admin.banner.postupdate');
    Route::get('banner/active/{id}', 'BannerController@active_atc')->name("admin.banner.active.atc");
    Route::get('banner/delete/{id}','BannerController@delete')->name('admin.banner.delete');

    Route::get('payment/list', 'AdminController@payment_list')->name("admin.payment.list");

    Route::get('config', 'ConfigController@config')->name("admin.config.list");
    Route::post('config/update', 'ConfigController@postupdate')->name('admin.config.postupdate');
});
