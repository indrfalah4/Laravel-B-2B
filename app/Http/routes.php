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

Route::get('/create',function(){
    return view('users.create');
});

Route::get('/show','MyuserController@Tampil')->name('show');

Route::post('/adduser', 'MyuserController@Simpan');

Route::get('/deleteuser/{id}', 'MyuserController@Hapus');