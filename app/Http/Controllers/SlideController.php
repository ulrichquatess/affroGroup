<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Slide;
use Pagination;
use Purifier;
use Image;
use Storage;


class SlideController extends Controller
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
        $slide = Slide::all();
        return view('admin.slides.index')->with('slides', $slide); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
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
               'title' => 'required',
               'content' => 'required',
               'slide1_image' => 'sometimes|image',
               'lang' => 'required'
          ]);


         $slide = new Slide; // assigns the model post to $val

         $slide->title = $request->input('title');
         $slide->content = $request->input('content'); 
         $slide->lang = $request->input('lang');

         //HERE WE save the image
            if($request->hasFile('slide1_image')) {
                $image = $request->file('slide1_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/slide/' . $filename);
                Image::make($image)->resize(700, 400)->save($location);

                $slide->image = $filename;

                $slide->save();
            }

         $slide->save();

           return redirect()->route('slide.show', $slide->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $slide = Slide::find($id);

        return view('admin.slides.show')->with('slide', $slide);
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
        $slide = Slide::find($id);
        

        // Return the view page here
        return view('admin.slides.edit')->with('slide', $slide);
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
               'title' => 'required',
               'content' => 'required',
               'slide1_image' => 'sometimes|image'
          ]);

         // save the data to the database NOTE :: here it is different from the other once

           $slide = Slide::find($id);

              $slide->title = $request->input('title');
              $slide->content = $request->input('content'); 
              

              //HERE WE save the image
            if ($request->hasFile('slide1_image')) {

               #Add new photo
                $image = $request->file('slide1_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/slide/' . $filename);
                Image::make($image)->resize(700, 400)->save($location);
            

                $oldFilename = $slide->image;


                //here we update the database
                $slide->image = $filename;

               # Delete the old photo
                Storage::delete($oldFilename);
           }


            $slide->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('slide.show', $slide->id);
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
        $slide = Slide::find($id);
        Storage::delete($slide->image);

         $slide->delete();

         return redirect()->route('slide.index');
    }
}
