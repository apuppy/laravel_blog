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

// basic route,treate with a Closure
Route::get('simple',function(){
    return 'Helllo World';
});

//specify a action to resolve the request
Route::get('/user', 'UserController@index');

//handel different request method
Route::resource('/user', 'UserController');

//match
Route::match(['get', 'post'], '/match_request', function () {
    return 'match request methods listed';
});

//any
Route::any('any_request', function () {
    return 'any request';
});

//redirect
Route::redirect('/here', '/there', 301);

//view route with variables
Route::view('/hello','hello',['name' => 'Taylor']);

//required parameters
Route::get('/notice/{id}',function($id){
    return 'User '.$id;
});

//optional parameters
Route::get('/customer/{name?}', function ($name = 'John') {
    return $name;
});

// regular expression
Route::get('/book/{name}', function ($name) {
    return strtoupper($name);
})->where('name', '[A-Za-z]+');
Route::get('/phone/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');
Route::get('/company/{id}/{name}', function ($id, $name) {
    return $id.' '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);