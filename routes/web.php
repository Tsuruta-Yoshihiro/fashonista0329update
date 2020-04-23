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


Route::group(['prefix' => 'user'], function(){
    Route::get('coordination/create', 'User\CoordinationController@add');//->middleware('auth');
    Route::post('coordination/create', 'User\CoordinationController@create');//->middleware('auth');
    
    Route::get('coordination/upload' , 'User\CoordinationController@upload');//->middleware('auth');
    
    
    Route::get('coordination', 'User\CoordinationController@index');//->middleware('auth');
    
    Route::get('coordination/edit', 'User\CoordinationController@edit');//->middleware('auth');
    Route::post('coordination/edit', 'User\CoordinationController@update');//->middleware('auth');
    
    Route::get('coordination/delete', 'User\CoordinationController@delete');//->middleware('auth');

    
    
    
    Route::get('profile/create', 'User\ProfileController@add');//->middleware('auth');
    Route::post('profile/create', 'User\ProfileController@create');//->middleware('auth');
    
    
    Route::get('profile/edit', 'User\ProfileController@edit');//->middleware('auth');
    Route::post('profile/edit', 'User\ProfileController@update');//->middleware('auth');
    
    
    Route::get('profile/mypages', 'User\ProfileController@mypages');//->middleware('auth');
    Route::get('profile/toppages', 'User\ProfileController@toppages');//->middleware('auth');
    Route::get('profile/othermypages', 'User\ProfileController@othermypages');//->middleware('auth');
    
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
