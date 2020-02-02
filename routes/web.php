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

Route::get('/', 'WelcomeController@index');

Route::get('settings/password', 'AdminController@editPassword');
Route::post('settings/password', 'AdminController@updatePassword');
Route::get('settings/profile', 'AdminController@editProfile');
Route::post('settings/profile', 'AdminController@updateProfile');

Route::get('/home', function(){
    return redirect('/');
});

Route::auth();

Route::get('logout', 'Auth\LoginController@logout');
Route::get('/pengumuman', 'HomeController@index');

Route::resource('siswa', 'SiswaController');
Route::resource('kelas', 'KelasController');

Route::resource('penguji', 'PengujiController');
Route::resource('kepsek', 'KepsekController');
Route::resource('hasil', 'HasilController');
