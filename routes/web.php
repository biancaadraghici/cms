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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',function(){
    return view('admin/index');
});

Route::resource('admin/users','AdminUsersController');





Route::group(['prefix'=> 'admin'], function(){

    

    Route::group(['prefix' => 'users'], function(){
        //create&save
        Route::get('create',['as'=>'admin-user-create', 'uses'=> 'AdminUsersController@create']);
        Route::post('create', ['as'=>'admin-user-save','uses'=>'AdminUsersController@store']);
        //edit&update
        Route::get('edit/{id}', ['as'=>'admin-user-edit', 'uses' => 'AdminUsersController@edit']);
        Route::patch('{id}', ['as' => 'admin-user-update', 'uses'=>'AdminUsersController@update']);
        //delete
        Route::get('delete/{id}', ['as' => 'admin-user-delete', 'uses' =>'AdminUsersController@destroy']);
       
    });
    

});