<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroll;
use App\Http\Controllers\electronics;
use App\Http\Controllers\clothes;
use App\Http\Controllers\accessories;
use App\Http\Controllers\login;
use App\Http\Controllers\track;
use App\Http\Controllers\signup;
use App\Http\Controllers\cart;
use App\Http\Controllers\services;
use App\Http\Controllers\mail;
use App\Http\Controllers\about;
use App\Http\Controllers\search;
use App\Http\Controllers\profile;
use App\Http\Controllers\kirana;
use App\Http\Controllers\logout;
use App\Http\Controllers\vacency;
use App\Http\Controllers\storedatabase;
use App\Http\Controllers\main;
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


Route::get('/',[main::class,'fromdatabase']);

Route::get('forloop',[usercontroll::class,'show']);

Route::get('electronics',[electronics::class,'show']);

Route::get('clothes',[clothes::class,'show']);

Route::get('accessories',[accessories::class,'show']);

Route::get('login',[login::class,'htmlview']);

Route::post('signupsubmit',[login::class,'signupdata']);

Route::post('loginsubmit',[login::class,'logindata']);

Route::get('track',[track::class,'show']);

Route::get('signup',[signup::class,'show']);

Route::get('cart',[cart::class,'show']);

Route::get('about',[about::class,'show']);

Route::get('profile',[profile::class,'show']);

Route::get('kirana',[kirana::class,'show']);

Route::get('mail',[mail::class,'show']);

Route::get('services',[services::class,'show']);

Route::get('vacency',[vacency::class,'show']);

Route::get('admin',[storedatabase::class,'admin']);

Route::get('add',[storedatabase::class,'addproduct']);

Route::post('productsubmitted',[storedatabase::class,'insertdb']);

Route::post('search',[search::class,'search']);

Route::get('suggest',[search::class,'suggestion']);

Route::get('productview',[cart::class,'search']);








