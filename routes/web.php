<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => 'RedirectIfNotAuthenticated'], function() {


Route::group(['prefix'=>"category",'as'=>'category.','namespace'=>"App\Http\Controllers"],function(){
     Route::get('/manage','CategoryController@index')->name('index');
     Route::get('/create','CategoryController@create')->name('create');
 });


Route::group(['prefix'=>"profile",'as'=>'profile.','namespace'=>"App\Http\Controllers"],function(){

     Route::get('/change/password','ProfileController@change_password')->name('change.password');
     Route::post('/change/password/updated','ProfileController@password_updated')->name('change.password.updated');

 });



/* product */
 Route::group(['prefix'=>"product",'as'=>'product.','namespace'=>"App\Http\Controllers"],function(){
     Route::get('/list','ProductController@index')->name('index');
     Route::get('/create','ProductController@create')->name('create');
     Route::post('/store','ProductController@store')->name('store');
     Route::get('/edit/{id}','ProductController@edit')->name('edit');
     Route::post('/update','ProductController@update')->name('update');
     Route::get('/delete/{id}','ProductController@delete')->name('delete');
 });
/* product */



/* setting */
 Route::group(['prefix'=>"setting",'as'=>'setting.','namespace'=>"App\Http\Controllers"],function(){
     Route::get('/create','SettingController@create')->name('create');
     Route::post('/store','SettingController@store')->name('store');
     Route::get('/{id}/edit','SettingController@edit')->name('edit');
     Route::patch('/{id}/update','SettingController@update')->name('update');
 });
/* setting */

/* additional work */
 Route::group(['prefix'=>"get",'as'=>'get.','namespace'=>"App\Http\Controllers"],function(){
     Route::get('/products','AdditionalController@getProducts')->name('products');
     Route::get('/customers','AdditionalController@getCustomers')->name('customers');
     Route::get('/invoices','AdditionalController@getInvoices')->name('invoices');
     Route::get('/customer/group','AdditionalController@getCustomerGroup')->name('customer.group');
 });
/* additional work */


// });




Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
