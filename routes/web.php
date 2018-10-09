<?php

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

Route::get('/', 'HomeController@index');
/**
 *
 * companies routes
 *
 */
Route::get('/who-we-are', 'CompanyController@index');
Route::get('/client-testimonial', 'CompanyController@getTestimonial');
Route::get('/career-faq', 'CompanyController@getCareerFaq');
/**
 *
 * portfolio routes
 *
 */
Route::get('/portfolio', 'PortfolioController@getPortfolio');
/**
 *
 * Blog Routes
 *
 */
Route::get('/blog', 'BlogController@index');
/**
 *
 * Contact Routes
 *
 */
Route::get('/contact', 'ContactController@index');
/**
 *
 * Project Routes
 *
 */
Route::get('/start-project', 'ProjectController@index');
/**
 *
 * Services Routes
 *
 */
Route::get('/service/{service}', 'ServiceController@getService');
/**
 *
 * Slider Routes
 *
 */
Route::group(['prefix' => 'slider'], function () {

    Route::get('/{appname}', 'HomeController@getAppLink');
});

Route::post('/message', 'ContactController@sendMessage');
Route::post('/start-project', 'ProjectController@projectInquiry');


