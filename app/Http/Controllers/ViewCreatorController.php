<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewCreatorController extends Controller 
{
	// Generic view loader
	// Define view in url. e,g /admin/users/create loads admin.users.create
	public function loadView(Request $request)
	{
		$viewPath = $request->input('v', 'dashboard');
		// $data = ucfirst( $request->input('d', 'User') );

		return 	view($viewPath);
	}

}