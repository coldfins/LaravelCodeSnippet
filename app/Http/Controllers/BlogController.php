<?php
/**
* Controller Used for web services
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class BlogController extends Controller
{
	/**
	 *
	 * get blog page
	 * @Akshay Patel
	 * @date 27 Aug 2018
	 *
	 */
	 public function index(){

		return view('blog.blog');
	 }
}