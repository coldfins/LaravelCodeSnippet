<?php
/**
* Controller Used for Display Page
*
*/
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use Mail;
use App\Project;

class ProjectController extends Controller
{
	 /**
	  *
	  * Project
	  *
	  *
	  */
	  public function index(){

		return view('project.project');

	 }

	 public function projectInquiry(Request $request){

		$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'skype' => 'required',
            'budget' => 'required',
            'country' => 'required',
			'phonenumber' => 'required',
			'message' => 'required',

		]);

		$project = new Project() ;

		if($file = $request->hasFile('filename')) {

            $file = $request->file('filename') ;

            $file_name = $file->getClientOriginalName() ;
			$destinationPath = public_path().'/userDocs/' ;
			$extension = $file->getClientOriginalExtension();
            $fileName = time() .$file_name. '.' . $extension;
            $file->move($destinationPath,$fileName);
            $project->filename = $fileName;
        }

     	$project->name	=	$request->get('name');
     	$project->email	=	$request->get('email');
     	$project->skypeId	=	$request->get('skype');
     	$project->budget	=	$request->get('budget');
     	$project->country =	$request->get('country');
     	$project->phonenumber	=	$request->get('phonenumber');
    	$project->message =	$request->get('message');
		$project->save();


		$request->session()->flash('alert-success', 'Thanks for your enquiry ! Our team will get back to you soon.');
		return view('project.project');

	 }

}