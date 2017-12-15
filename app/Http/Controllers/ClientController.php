<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Client;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ClientController extends Controller
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
        $client = Client::paginate(10);
        return view('admin.clients.index')->with('clients', $client); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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
               'client_name' => 'required',
               'description' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkedin' => '',
               'gmail' => '',
               'client_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $client = new Client; 

         $client->client_name = $request->input('client_name');
         $client->description = $request->input('description');
         $client->facebook = $request->input('facebook');
         $client->twitter = $request->input('twitter');
         $client->linkedin = $request->input('linkedin');
         $client->gmail = $request->input('gmail');

            //HERE WE save the image
            if($request->hasFile('client_image')) {
                $image = $request->file('client_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fill = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/client/' . $filename);
                $loca = public_path('images/client-thumnail/' . $fill);
                Image::make($image)->resize(500, 400)->save($location);
                Image::make($image)->resize(400, 330)->save($loca);
                Image::make($image)->crop(370, 310, null, null)->save($loca);


                $client->image = $filename; 
                $client->image = $fill;

                $client->save();
            }

         //save
           $client->save();

           return redirect()->route('client.show', $client->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('admin.clients.show')->with('client', $client);
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
        $client = Client::find($id);
        
        // Return the view page here
        return view('admin.clients.edit')->with('client', $client); 
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
        $client = Client::find($id);
        
             $this->validate($request, [
               'client_name' => 'required',
               'position' => 'required',
               'facebook' => '',
               'twitter' => '',
               'linkedin' => '',
               'gmail' => '',
               'client_image' => 'image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $client = Client::find($id);

           $client->client_name = $request->input('client_name');
           $client->description = Purifier::clean($request->input('description'));
           $client->facebook = $request->input('facebook');
           $client->twitter = $request->input('twitter');
           $client->linkedin = $request->input('linkedin');
           $client->gmail = $request->input('gmail');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('client_image')) {

               #Add new photo
                $image = $request->file('client_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fill = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/client/' . $filename);
                $loca = public_path('images/client-thumnail/' . $fill);
                Image::make($image)->resize(800, 400)->save($location);
                Image::make($image)->resize(400, 440)->save($loca);
                Image::make($image)->crop(370, 410, null, null)->save($loca);
                $oldFilename = $client->image;


                //here we update the database
                $client->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $client->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('client.show', $client->id);
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
        $client = Client::find($id);
        Storage::delete($client->image);

         $client->delete();

         return redirect()->route('client.index');
    }
}
