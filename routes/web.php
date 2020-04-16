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

// Define routes for the public
Route::get('/', function () {
    	return view('public.home');
});


// Define routes for logged in users
Route::get('/dashboard', 'DashboardController@index')
	->name('dashboard')
	->middleware('auth');


// Define routes for Listmanager module
Route::group([
		'prefix' => 'listmanager', 
		'as' => 'listmanager.', 
		'namespace' => 'Listmanager', 
		'middleware' => ['auth']
	], function () {

	// @todo Route::delete();
	Route::Resource('contacts', 'ContactController');
	Route::Resource('lists', 'ListController');
	Route::Resource('segments', 'SegmentController');
	Route::Resource('tags', 'TagController');
});

// Define routes for Inboxmag module
Route::group([
		'prefix' => 'inboxmag', 
		'as' => 'inboxmag.', 
		'namespace' => 'Inboxmag',
		'middleware' => ['auth']
	], function () {

	// @todo Route::delete();
	Route::Resource('magazines', 'MagazineController');
	Route::Resource('issues', 'IssueController');
	Route::Resource('articles', 'ArticleController');
	Route::Resource('categories', 'CategoryController');
	Route::Resource('suggestions', 'SuggestionController');
});

// Define routes for Admin module (only accesible to superadmin)
Route::group([
		'prefix' => 'admin', 
		'as' => 'admin.', 
		'namespace' => 'Auth',
		'middleware' => ['auth'] // @todo make this accesible to only superadmin
	], function () {

	// @todo Route::delete();
	Route::Resource('users', 'UserController');
});





