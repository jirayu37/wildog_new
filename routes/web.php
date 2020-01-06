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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/customers', 'CustomerController@index')->name('cusrtomers');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('customers' , 'CustomerController');

// Route::get('admin/informations/create/{id?}', 'InformationController@create');
Route::get('informations/create/{id?}', 'InformationController@create');
Route::resource('informations' , 'InformationController');



// Route::get('import-export', 'TestController@importExport');
// Route::post('import', 'TestController@import');
// Route::get('export', 'TestController@export');


//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');

   

    //Route::get('/home', 'CustomerController');

});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){

        Route::post('/data_update', 'admin\AdminController@update');
        Route::get('/dashboard', 'admin\AdminController@index');
        Route::get('analyze', 'AnalyzeController@index');

        Route::get('add_customer', 'CustomerController@create');
Route::get('store_customer', 'CustomerController@store');
          
    });
});