<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Page;
use Pagination;
use Image;
use Storage;


class PageController extends Controller
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
        $page = Page::paginate(15);
        return view('admin.pages.index')->with('pages', $page); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
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
               
               
          ]);


         $page = new Page; // assigns the model post to $val

         $page->title = $request->input('title');
         $page->content = $request->input('content');
         $page->title_fr = $request->input('title_fr');
         $page->content_fr = $request->input('content_fr'); 
         //save
         $page->save();

           return redirect()->route('page.show', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $page = Page::find($id);

        return view('admin.pages.show')->with('page', $page);
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
        $page = Page::find($id);
        

        // Return the view page here
        return view('admin.pages.edit')->with('page', $page);
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
               
          ]);

         // save the data to the database NOTE :: here it is different from the other once

           $page = Page::find($id);

             $page->title = $request->input('title');
             $page->content = $request->input('content');
             $page->title_fr = $request->input('title_fr'); 
             $page->content_fr = $request->input('content_fr');

            $page->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('page.show', $page->id);
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
        $page = Page::find($id);
        $page->delete();
        return redirect()->route('page.index');
    }
}
