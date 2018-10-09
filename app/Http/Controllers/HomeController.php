<?php
/**
* Controller Used for web services
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
	/**
	 *
	 * display index page
	 * @Akshay Patel
	 * @date 27 Aug 2018
	 *
	 */
	 public function index(){
		return view('index');
	 }
	 /**
	  *
	  *
	  * @author Akshay Patel
	  *
	  *
	  */
	  public function getAppLink(Request $request){


		$app = $request->appname;
		return view('application.'.$app);
	 }


}