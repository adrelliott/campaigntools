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


Route::get('v', 'ViewCreatorController@loadView');



Auth::routes();

// Define routes for the public
Route::get('/', function () {
    	return view('public.home');
});


// Define routes for logged in users
Route::get('/dashboard', 'DashboardController@index')
	->name('dashboard')
	->middleware('auth');


// =============================================================================
// ----------------------- THE APP ---------------------------------------------
// =============================================================================

// Define routes for Listmanager module
Route::group([
		'prefix' => 'listmanager', 
		'as' => 'listmanager.', 
		'namespace' => 'Listmanager', 
		'middleware' => ['auth']
	], function () {

	// Custom routes
	Route::get('/contacts/{contact}/delete', 'ContactController@deleteConfirm')->name('contacts.delete');
	Route::get('/lists/{list}/upload', 'ListController@uploadCreate')->name('lists.upload');
	Route::post('/lists/{list}/upload', 'ListController@uploadStore')->name('lists.upload');
	Route::get('/lists/{list}/delete', 'ListController@deleteConfirm')->name('lists.delete');
	Route::get('/segments/{segment}/delete', 'SegmentController@deleteConfirm')->name('segments.delete');
	Route::get('/tags/{tag}/delete', 'TagController@deleteConfirm')->name('tags.delete');

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
		'namespace' => 'Admin',
		'middleware' => ['auth'] // @todo make this accesible to only superadmin
	], function () {

	// @todo Route::delete();
	Route::Resource('users', 'UserController');
	Route::Resource('organisations', 'OrganisationController');
});




// =============================================================================
// ----------------------- API -------------------------------------------------
// =============================================================================

// Define routes for Listmanager module
Route::group([
		'prefix' => 'api/v1/listmanager', 
		'as' => 'api.listmanager.', 
		'namespace' => 'Api\V1\Listmanager', 
		'middleware' => ['auth']
	], function () {

	// @todo Route::delete();
	// Route::Resource('contacts', 'ContactController');
	Route::Resource('lists', 'ListController');
	// Route::Resource('segments', 'SegmentController');
	// Route::Resource('tags', 'TagController');
});


// Define routes for Inboxmag module
Route::group([
		'prefix' => 'api/v1/inboxmag', 
		'as' => 'api.inboxmag.', 
		'namespace' => 'Api\V1\Inboxmag',
		'middleware' => ['auth']
	], function () {

	// @todo Route::delete();
	// Route::Resource('magazines', 'MagazineController');
	// Route::Resource('issues', 'IssueController');
	// Route::Resource('articles', 'ArticleController');
	// Route::Resource('categories', 'CategoryController');
	// Route::Resource('suggestions', 'SuggestionController');
});

// Define routes for Admin module (only accesible to superadmin)
Route::group([
		'prefix' => 'api/v1/admin', 
		'as' => 'api.admin.', 
		'namespace' => 'Api\V1\Auth',
		'middleware' => ['auth'] // @todo make this accesible to only superadmin
	], function () {

	// @todo Route::delete();
	// Route::Resource('users', 'UserController');
});





