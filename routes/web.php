<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => 'RedirectIfNotAuthenticated'], function() {


/* hero */
 Route::group(['prefix'=>"hero",'as'=>'hero.','namespace'=>"App\Http\Controllers\Landing"],function(){
     Route::get('/list','HeroSectionController@index')->name('index');
     Route::get('/create','HeroSectionController@create')->name('create');
     Route::post('/store','HeroSectionController@store')->name('store');
     Route::get('/edit/{id}','HeroSectionController@edit')->name('edit');
     Route::post('/update','HeroSectionController@update')->name('update');
     Route::get('/delete/{id}','HeroSectionController@delete')->name('delete');
 });
/* hero */


/* about */
Route::group(['prefix'=>"about",'as'=>'about.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/list','AboutController@index')->name('index');
    Route::get('/create','AboutController@create')->name('create');
    Route::post('/store','AboutController@store')->name('store');
    Route::get('/edit/{id}','AboutController@edit')->name('edit');
    Route::post('/update','AboutController@update')->name('update');
    Route::get('/delete/{id}','AboutController@delete')->name('delete');
});
/* about */

/* service */
Route::group(['prefix'=>"service",'as'=>'service.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/list','ServiceController@index')->name('index');
    Route::get('/create','ServiceController@create')->name('create');
    Route::post('/store','ServiceController@store')->name('store');
    Route::get('/edit/{id}','ServiceController@edit')->name('edit');
    Route::post('/update','ServiceController@update')->name('update');
    Route::get('/delete/{id}','ServiceController@delete')->name('delete');
});
/* service */

/* technology */
Route::group(['prefix'=>"technology",'as'=>'technology.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/list','TechnologyController@index')->name('index');
    Route::get('/create','TechnologyController@create')->name('create');
    Route::post('/store','TechnologyController@store')->name('store');
    Route::get('/edit/{id}','TechnologyController@edit')->name('edit');
    Route::post('/update','TechnologyController@update')->name('update');
    Route::get('/delete/{id}','TechnologyController@delete')->name('delete');
});
/* technology */

/* whychoose */
Route::group(['prefix'=>"whychoose",'as'=>'whychoose.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/list','WhyChooseController@index')->name('index');
    Route::get('/create','WhyChooseController@create')->name('create');
    Route::post('/store','WhyChooseController@store')->name('store');
    Route::get('/edit/{id}','WhyChooseController@edit')->name('edit');
    Route::post('/update','WhyChooseController@update')->name('update');
    Route::get('/delete/{id}','WhyChooseController@delete')->name('delete');
});
/* whychoose */


/* stat */
Route::group(['prefix'=>"stat",'as'=>'stat.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/list','StatController@index')->name('index');
    Route::get('/create','StatController@create')->name('create');
    Route::post('/store','StatController@store')->name('store');
    Route::get('/edit/{id}','StatController@edit')->name('edit');
    Route::post('/update','StatController@update')->name('update');
    Route::get('/delete/{id}','StatController@delete')->name('delete');
});
/* stat */

/* client */
Route::group(['prefix'=>"client",'as'=>'client.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/list','ClientController@index')->name('index');
    Route::get('/create','ClientController@create')->name('create');
    Route::post('/store','ClientController@store')->name('store');
    Route::get('/edit/{id}','ClientController@edit')->name('edit');
    Route::post('/update','ClientController@update')->name('update');
    Route::get('/delete/{id}','ClientController@delete')->name('delete');
});
/* client */

/* setting */
Route::group(['prefix'=>"social",'as'=>'social.','namespace'=>"App\Http\Controllers\Landing"],function(){
    Route::get('/create','SocialController@create')->name('create');
    Route::post('/store','SocialController@store')->name('store');
    Route::get('/{id}/edit','SocialController@edit')->name('edit');
    Route::patch('/{id}/update','SocialController@update')->name('update');
});
/* setting */

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
