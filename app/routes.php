<?php
 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::filter('admin', function()
{
    return Redirect::to('/posts');
});


Route::when('admin/*', 'admin', array('posts'));

 
Route::get('/posts','PostController@index');
 
 
Route::get('/posts/{id}','PostController@lire');
 
 
Route::get('/posts/user/{id}','PostController@user');


Route::get('admin/posts/add','PostController@add');


Route::get('/user/login','UserController@login');


Route::get('/user/signup','UserController@signup');



?>