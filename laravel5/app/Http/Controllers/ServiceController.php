<?php namespace App\Http\Controllers;

use DB;
use App\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
	public function all()
    {
	     $services = Service::all();		 
		 return view('service.allservices', ['services' => $services]);
	} 	 
	  
}
