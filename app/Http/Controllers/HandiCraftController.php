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
        $handiCrafts = HandiCraft::orderBy('id', 'desc')->get();
        return view('handiCraft.handi_craft')->with('handiCrafts', $handiCrafts);
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
        
        // Validating image file
        $request->validate([
            'title' => 'required',
            'Image' => 'required|mimes:jpg,jpeg,png'
        ]);


        // Giving unique name to image
        $newImageName = time() . '-' . $request->title . '.' . $request->Image->extension();
        // moving image file to our app
        $request->Image->move(public_path('crafts'), $newImageName);
        
        // Getting data from user input
        $title = $request->input('title');
        // checking any function with dieDump (dd)
        // dd($test);





        // Sroting into database
        $binding = new HandiCraft;
        // Getting form input data
        $binding->title = $title;
        $binding->image = $newImageName;
        
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
    public function destroy($id)
    {
        $handiCraft = HandiCraft::find($id);
        
        $handiCraft->delete();

        return redirect('/zexadmin')->with('Deleted', 'Item Deleted.');
    }
}
