<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	// Use a controller rather than a route, as we may want to 
	// customise the dashboard later
    public function index()
    {
    	return view('dashboard');
    }
}
