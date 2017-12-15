<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Service;
use App\Project;
use App\Page;
use App\Staff;

class SolarController extends Controller
{
    public function index() {
       
 	  return view('BME.index');
    }

    public function contact() {
     	return view('BME.contact');    
    }

//This Part is responsiple for sending emails

     public function postContact(Request $request) {

        Mail::send(new sendMail());
        return view('BME.contact');    
    }

    public function services() {
    	 $service = Service::all();
     	return view('BME.service')->with('services', $service);    
    }

    public function getSingleService($id){
    	$service = Service::where('id', '=', $id)->first();
    	return view('BME.single-service')->with('service', $service);
    }

    public function projects() {
         $project = Project::paginate(9);
         return view('BME.project')->with('projects', $project);    
    }

     public function getSingleProject($id){
        $project = Project::where('id', '=', $id)->first();
        
        return view('BME.single-project')->with('project', $project);
    }

    public function about(){

        //$page = Page::find($id);
        return view('BME.about');
    }

     public function team(){

        $staffs = Staff::paginate(6);
        return view('BME.team')->with('staffs', $staffs);
    }
}


