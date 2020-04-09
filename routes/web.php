<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'lists', 'as' => 'listmanager.', 'namespace' => 'Listmanager'], function () {
	
	// Contacts
	// Route::delete();
	Route::Resource('contacts', 'ContactController');

	// Tags
	Route::Resource('tags', 'TagsController');
});
