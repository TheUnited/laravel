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




Route::get('/', function()
{
    return 'Hello World';
});


Route::get('/posts','PostController@index');
 
 
Route::get('/posts/{id}','PostController@lire');
 
 
Route::get('/posts/user/{id}','PostController@user');


Route::get('/posts/add', array('before' => 'auth','uses' => 'PostController@add'));


Route::get('/user/login','UserController@login');


Route::get('/user/signup','UserController@signup');



?>
