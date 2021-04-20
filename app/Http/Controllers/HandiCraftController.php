<?php

namespace App\Http\Controllers;

use App\Models\HandiCraft;
use Illuminate\Http\Request;

class HandiCraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // showing Handi Craft items in front-end
        return view('handiCraft.handi_craft');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Showing handi craft item upload form
        return view('handiCraft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Getting data from user input
        $title = $request->input('title');
        $image = $request->file('Image')->getClientOriginalName();
        // uploading image to file system
        $request->file('Image')->store('public/crafts/');

        // Sroting into database
        $binding = new HandiCraft;
        // Getting form input data
        $binding->title = $title;
        $binding->image = $image;
        
        // saving form data
        $binding->save();
        

        return redirect('/zexadmin')->with('Uploaded', 'Item uploaded.');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HandiCraft  $handiCraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(HandiCraft $handiCraft)
    {
        //
    }
}
