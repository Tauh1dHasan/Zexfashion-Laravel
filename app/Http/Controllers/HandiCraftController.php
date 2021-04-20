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
        return view('handiCraft.handi_craft');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HandiCraft  $handiCraft
     * @return \Illuminate\Http\Response
     */
    public function show(HandiCraft $handiCraft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HandiCraft  $handiCraft
     * @return \Illuminate\Http\Response
     */
    public function edit(HandiCraft $handiCraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HandiCraft  $handiCraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HandiCraft $handiCraft)
    {
        //
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
