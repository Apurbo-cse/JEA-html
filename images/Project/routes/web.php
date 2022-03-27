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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','AboutController@index')->name('index');
Route::get('about','AboutController@about')->name('about');


Route::group(['prefix'=>'engineers'], function (){
    
    Route::get('msc','MscController@msc')->name('msc');
    Route::get('bsc','BscController@bsc')->name('bsc');
    Route::get('bsc_diploma','bscdipController@bsc_diploma')->name('bsc_diploma');
    Route::get('diploma','DiplomaController@diploma')->name('diploma');
    
    Route::get('profiles','ProfilesController@profiles')->name('profiles');
    
});

Route::get('gallery','GalleryController@gallery')->name('gallery');


Route::group(['prefix'=>'blog'], function (){
    
    Route::get('/','BlogController@blog')->name('blog');
    Route::get('detailes','BlogController@detailes')->name('detailes');

    
});


Route::get('signin','LoginController@signin')->name('signin');
Route::get('join','LoginController@join')->name('join');







// *******Admin Panel Routes*******//

Auth::routes();
Route::get('dashboard', 'HomeController@index')->name('master');

Route::group(['prefix'=>'dashboard', 'middleware'=>['auth'], 'namespace'=>'admin'], function (){
    
    Route::get('dashboard', 'HomeController@index')->name('master');
    Route::resource('gallery', 'GalleryController');
    Route::resource('about', 'AboutController');
    Route::resource('slider', 'SliderController');
    Route::resource('blog', 'BlogController');
});




