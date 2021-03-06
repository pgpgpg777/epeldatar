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

Route::resources([
    'users' => 'UserController',
    'groups' => 'GroupController',
    'tasks' => 'TaskController',
    'supplies' => 'SupplyController'
]);

Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/show_supply/{supply_id}', 'SupplyController@show_supply')->name('show_supply');
Route::get('/show_task/{task_id}', 'TaskController@show_task')->name('show_task');

Auth::routes();

