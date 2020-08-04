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

//ホーム画面
Route::get ('/', 'HomeController@index')->name('home');

//商品一覧
Route::get ('/product/index', 'ProductController@index')->name('product_index');

//販売状態変更
Route::post('/product/flg', 'ProductController@flg')->name('product_flg'); //販売中 ⇄ 停止中のボタン部分

//商品登録
Route::get ('/product/create', 'ProductController@create')->name('product_create');
Route::post ('/product/create', 'ProductController@insert')->name('product_insert');

//商品詳細
Route::get ('/product/detail/{id}', 'ProductController@detail')->name('product_detail');

//商品変更
Route::get ('/product/edit/{id}', 'ProductController@edit')->name('product_edit');
Route::post ('/product/edit', 'ProductController@update')->name('product_update');

//商品削除
Route::post ('/product/delete', 'ProductController@delete')->name('product_delete');

/* -------------------------------------------------------------------------- */

//画像識別
//Route::get('/profile', 'ProfileController@index');の部分
Route::get ('/image', 'ImageController@reading')->name('image_reading'); //画像を読み込む
//Route::post('/profile', 'ProfileController@store');の部分
Route::post ('/image', 'ImageController@judgment')->name('image_judgment'); //サーバへリクエストを送信

//販売価格表示
//Route::get ('/image/price', 'ImageController@price')->name('image_price');
Route::post ('/image/price', 'ImageController@price');
//Route::post ('/image/price', 'ImageController@index');

/* -------------------------------------------------------------------------- */

/* -------------------------------------------------------------------------- */

//条件選択
Route::get ('/sale/search', 'SaleController@condition')->name('sale_condition'); //検索条件の指定

//売上表示
Route::post ('/sale/result', 'SaleController@result')->name('sale_result'); //検索条件をもとにDB検索・結果表示
