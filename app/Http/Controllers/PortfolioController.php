<?php
/**
* Controller Used for Display Page
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class PortfolioController extends Controller
{
	 /**
	  *
	  * Portfolio
	  *
	  *
	  */
	  public function getPortfolio(){

		return view('portfolio.portfolio');

	 }

}