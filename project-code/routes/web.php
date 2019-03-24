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
Route::get('/index.php', function () {
    return view('welcome');
});
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/job/{id}', function ($id) {
    return view('job');
});
Route::get('/job', function () {
    return view('create-job');
});
Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
