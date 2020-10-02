<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialSetting;

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

// STATIC PAGES
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'StaticPagesController@thankYou');
Route::get('/about', 'StaticPagesController@about');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/offers/thank-you', 'StaticPagesController@thankYou');


// FOOD ITEMS 
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::post('/admin/food-items', 'admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');


// ADMIN DASHBOARD
Route::get('/admin', 'admin\AdminController@dashboard');

// ADMIN FOOD CATEGORIES
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

// ADMIN CUSTOMERS
// ADMIN MEMBERS
Route::get('/admin/members', 'admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');

// ADMIN RESERVATIONS
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');


// ADMIN Settings
Route::get('/admin/settings/general', 'admin\SettingController@general');
Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral');
Route::get('/admin/settings/seo', 'admin\SettingController@seo');
Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo');
Route::get('/admin/settings/social', 'admin\SettingController@social');
Route::put('/admin/settings/social', 'admin\SettingController@saveSocial');

// ADMIN USERS 
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::post('/admin/users', 'admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');



// ADMIN AUTHENTICATION
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

View::composer(['home', 'pages/about', 'pages/contacts', 'pages/offers', 'pages/reservations', 'thank-you', 'menu/index', 'menu/single-menu'], function ($view) {

    $generalSettings = GeneralSetting::find(1);
    $socialSettings = SocialSetting::find(1);
    $seoSettings = SeoSetting::find(1);

    $view->with('settings', [
        "general" => $generalSettings,
        "social" => $socialSettings,
        "seo" => $seoSettings
    ]);
});