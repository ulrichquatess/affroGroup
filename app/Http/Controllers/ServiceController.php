<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Service;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ServiceController extends Controller
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
        $service = Service::paginate(10);
        return view('admin.services.index')->with('services', $service); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATE DATA

        $this->validate($request, [
               'service_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $service = new Service; 

         $service->service_title = $request->input('service_title');
         $service->service_description = $request->input('service_description');
         $service->service_title_fr = $request->input('service_title_fr');
         $service->service_description_fr = $request->input('service_description_fr');

            //HERE WE save the image
            if($request->hasFile('service_image')) {
                $image = $request->file('service_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/service/' . $filename);
                $loca = public_path('images/service-thumnail/' . $fille);
                Image::make($image)->resize(700, 400)->save($location);
                Image::make($image)->resize(350, 300)->save($loca);
                Image::make($image)->crop(270, 270, null, null)->save($loca);

                $service->image = $filename;
                $service->image = $fille; 

                $service->save();
            }


         //save
            $service->save();

           return redirect()->route('service.show', $service->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);

        return view('admin.services.show')->with('service', $service);
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
        $service = Service::find($id);
        
        // Return the view page here
        return view('admin.services.edit')->with('service', $service); 
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
        $service = Service::find($id);
        
             $this->validate($request, [
              'service_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $service = Service::find($id);

           $service->service_title = $request->input('service_title');
           $service->service_description = Purifier::clean($request->input('service_description'));
           $service->service_title_fr = $request->input('service_title_fr');
           $service->service_description_fr = Purifier::clean($request->input('service_description_fr'));

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('service_image')) {

               #Add new photo
                $image = $request->file('service_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fille = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/service/' . $filename);
                $loca = public_path('images/service-thumnail/' . $fille);
                Image::make($image)->resize(700, 400)->save($location);
                Image::make($image)->resize(350, 300)->save($loca);
                Image::make($image)->crop(270, 270, null, null)->save($loca);

                $oldFilename = $service->image;


                //here we update the database
                $service->image = $filename;
                $service->image = $fille;  

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $service->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('service.show', $service->id);
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
        $service = Service::find($id);
        Storage::delete($service->image);

         $service->delete();

         return redirect()->route('service.index');
    }

}
