<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hero', 'App\Http\Controllers\Api\HeroController@index');
Route::get('/about', 'App\Http\Controllers\Api\AboutController@index');
Route::get('/social', 'App\Http\Controllers\Api\SocialController@index');
Route::get('/services', 'App\Http\Controllers\Api\ServiceController@index');
Route::get('/stats', 'App\Http\Controllers\Api\StatController@index');
Route::get('/technologies', 'App\Http\Controllers\Api\TechnologyController@index');
Route::get('/whychoose', 'App\Http\Controllers\Api\WhyChooseController@index');
Route::get('/clients', 'App\Http\Controllers\Api\ClientController@index');
Route::get('/setting', 'App\Http\Controllers\Api\SettingController@index');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
