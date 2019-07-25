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
/* Resource Routes */ 
Route::resource('admin/users','AdminUsersController');
Route::resource('admin/posts','AdminPostsController');


/* Group Routes */
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

    Route::group(['prefix'=>'posts'],function(){
        //create
        Route::get('create',['as'=>'admin-post-create','uses'=>'AdminPostsController@create']);
        //store
        Route::post('create',['as'=>'admin-post-save','uses'=>'AdminPostsController@store']);
        //edit
        Route::get('edit/{id}',['as'=>'admin-post-edit','uses'=>'AdminPostsController@edit']);
        //update
        Route::patch('{id}',['as'=>'admin-post-update','uses'=>'AdminPostsController@update']);
        //delete
        Route::get('delete/{id}',['as'=>'admin-post-delete','uses'=>'AdminPostsController@destroy']);
    });
    

});