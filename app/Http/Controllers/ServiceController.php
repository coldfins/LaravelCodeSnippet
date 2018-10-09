<?php
/**
* Controller Used for Display Page
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
	 /**
	  *
	  * Services pages
	  *
	  *
	  */
	  public function getService(Request $request){

		$service = $request->service;
		return view('services.'.$service);

	 }

}