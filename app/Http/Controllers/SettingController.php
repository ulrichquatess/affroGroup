<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Setting;
use Pagination;
use Image;
use Storage;


class SettingController extends Controller
{
    public function __construct() { 

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //This is where we read all our blog post
        $setting = Setting::paginate(15);
        return view('admin.settings.index')->with('settings', $setting); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
               'email' => 'required',
               'phone' => 'required',
               'address' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkin' => ''
          ]);


         $setting = new Setting; // assigns the model post to $val

         $setting->email = $request->input('email');
         $setting->phone = $request->input('phone');
         $setting->address = $request->input('address');
         $setting->facebook = $request->input('facebook'); 
         $setting->twitter = $request->input('twitter');
         $setting->linkedin = $request->input('linkedin');                    //save
         $setting->save();

           return redirect()->route('setting.index', $setting->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $setting = Setting::find($id);

        //return view('admin.settings.show')->with('setting', $setting);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Assign or find the $id of each field
        $setting = Setting::find($id);
        

        // Return the view page here
        return view('admin.settings.edit')->with('setting', $setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
         $this->validate($request, [
               'email' => 'required',
               'phone' => 'required',
               'address' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkin' => ''
          ]);

         // save the data to the database NOTE :: here it is different from the other once

           $setting = Setting::find($id);

             $setting->email = $request->input('email');
             $setting->phone = $request->input('phone');
             $setting->address = $request->input('address');
             $setting->facebook = $request->input('facebook'); 
             $setting->twitter = $request->input('twitter');
             $setting->linkedin = $request->input('linkedin'); 

            $setting->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Here we collect the $id
        $setting = Setting::find($id);
        $setting->delete();
        return redirect()->route('setting.index');
    }
}
