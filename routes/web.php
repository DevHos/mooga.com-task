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

Route::get('/', 'ProjectsController@index');

Auth::routes();

//facebook login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/projects', 'ProjectsController@index')->name('projects.all');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::post('/projects/store', 'ProjectsController@store')->name('projects.store');
Route::get('/projects/{project}', 'ProjectsController@show')->name('project.show');

//Route::get('/home', 'HomeController@index')->name('projects.all');
