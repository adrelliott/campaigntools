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


Route::group(['prefix' => 'listmanager', 'as' => 'listmanager.', 'namespace' => 'Listmanager'], function () {

	// Route::delete();
	Route::Resource('contacts', 'ContactController');
	Route::Resource('lists', 'ListController');
	Route::Resource('segments', 'SegmentController');
	Route::Resource('tags', 'TagController');
});
Route::group(['prefix' => 'inboxmag', 'as' => 'inboxmag.', 'namespace' => 'Inboxmag'], function () {

	// Route::delete();
	Route::Resource('magazines', 'MagazineController');
	Route::Resource('issues', 'IssueController');
	Route::Resource('articles', 'ArticleController');
	Route::Resource('categories', 'CategoryController');
	Route::Resource('suggestions', 'SuggestionController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Auth'], function () {

	// Route::delete();
	Route::Resource('users', 'UserController');
});





