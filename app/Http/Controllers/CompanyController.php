<?php
/**
* Controller Used for web services
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class CompanyController extends Controller
{
	/**
	 *
	 * display company who we are page
	 * @Akshay Patel
	 * @date 27 Aug 2018
	 *
	 */
	 public function index(){

		return view('company.how_we_are');
	 }
	  /**
	  *
	  * Client Testimonial
	  *
	  */
	  public function getTestimonial(){

		return view('company.client_testimonial');
	 }
	   /**
	  *
	  * Client Testimonial
	  *
	  */
	  public function getCareerFaq(){

		return view('company.career_faq');
	 }
	 /**
	  *
	  * Portfolio
	  *
	  *
	  */
	  public function getPortfolio(){

		return view('company.portfolio');
	 }
	 /**
	  *
	  * Blog
	  *
	  *
	  */
	  public function getBlog(){

		return view('company.blog');

	  }





}