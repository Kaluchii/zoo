<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front.pages.index');
});

Route::get('/add_ad', function () {
    return view('front.pages.ad');
});

Route::get('/category', function () {
    return view('front.pages.category');
});

Route::get('/declaration', function () {
    return view('front.pages.declaration');
});

Route::get('/publications', function () {
    return view('front.pages.publications');
});

Route::get('/publication', function () {
    return view('front.pages.publication');
});

Route::get('/main', function () {
    return view('front.pages.main');
});

Route::get('/zoo_login', function () {
    return view('front.pages.login');
});

Route::get('/zoo_registration', function () {
    return view('front.pages.registration');
});

Route::get('/acc_dialogs', function () {
    return view('front.pages.acc_dialogs');
});

Route::get('/acc_dialog', function () {
    return view('front.pages.acc_dialog');
});

Route::get('/acc_add_banner', function () {
    return view('front.pages.acc_add_banner');
});

Route::get('/acc_banners', function () {
    return view('front.pages.acc_banners');
});

Route::get('/acc_options', function () {
    return view('front.pages.acc_options');
});

Route::post('/captcha',          'Back\MailController@Captcha');
Route::post('/feedback/mail',    'Back\MailController@send');


Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){

    Route::get('/',         'AdminController@getIndex');



    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

