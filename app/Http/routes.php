<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');





Route::group(['Middleware'=>'auth', 'admin'], function(){

    Route::resource('admin/users','AdminUserController');

    Route::resource('admin/posts','AdminPostsController');
//
//    Route::get('admin_user',[
//        "uses"=>"AdminUserController@index",
//        "as"=>"admin_user"
//    ]);

    Route::get('/admin', function(){
        //return view('admin.index');
        return view('admin_template');
    });

});


Route::get('/test', 'TestController@index');