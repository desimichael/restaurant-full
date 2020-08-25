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

// HOME PAGE 
Route::get('/', function () {
    return view('home');
});

// ADMIN DASHBOARD
Route::get('/admin', function () {
    return view('admin/dashboard');
});

// ADMIN FOOD CATEGORIES
Route::get('/admin/food-categories', function () {
    return view('admin/food-categories/all');
});
// Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
// Route::get('/admin/food-categories', 'admin\FoodCategoriesController@create');
// Route::get('/admin/food-categories', 'admin\FoodCategoriesController@edit');

// ADMIN AUTHENTICATION
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

// STATIC PAGES
Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/menu/{slug}', function () {
    return view('menu/single-menu');
});
Route::get('/about', 'StaticPagesController@about');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/events', 'StaticPagesController@events');
Route::get('/waitlist', 'StaticPagesController@waitlist');