<?php
/**
* Controller Used for web services
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Mail;
use App\User;


class ContactController extends Controller
{
	/**
	 *
	 * display contact page
	 * @Akshay Patel
	 * @date 27 Aug 2018
	 *
	 */
	 public function index(){

		return view('contact.contact');
	 }

	 public function sendMessage(Request $request){

		// $notification = array(
        //     'message' => 'Thanks! We shall get back to you soon.',
        //     'alert-type' => 'success'
        // );
		// $request->session()->put('notification',$notification);

		$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'message' => 'required'
		]);

     	$user = new User;
     	$user->name	=	$request->get('name');
     	$user->email	=	$request->get('email');
     	$user->phonenumber	=	$request->get('phonenumber');
    	$user->message =	$request->get('message');
		$user->save();

		$to_email = "companytest1206@gmail.com";

		// Mail::send('emails.mail', ['name' => $to_email], function($message) use ($to_email) {
		// 	$message->to($to_email);
		// 	$message->subject('E-Mail Example');
		// });

		$request->session()->flash('alert-success', 'Thanks! We shall get back to you soon.');
		return view('contact.contact');


	 }
}