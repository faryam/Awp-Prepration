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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/categories', 'CategoryController@all_categories')->name('allcategories');
Route::get('/findcategory', 'CategoryController@find_category')->name('findcategory');
Route::get('/addcategory', 'CategoryController@add_category')->name('addcategory');
Route::post('/storecategory', 'CategoryController@store_category')->name('storecategory');
Route::post('/updatecategory', 'CategoryController@update_category')->name('updatecategory');
Route::post('/deletecategory', 'CategoryController@delete_category')->name('deletecategory');

