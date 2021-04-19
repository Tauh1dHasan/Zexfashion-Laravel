<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // controller for categories page
    public function fleece_hoodies(){
    	return view('categories.fleece_hoodies');
    }

    public function jeans(){
    	return view('categories.jeans');
    }

    public function leggings(){
    	return view('categories.leggings');
    }

    public function polo_shirts(){
    	return view('categories.polo_shirts');
    }

    public function shorts_capri(){
    	return view('categories.shorts_capri');
    }

    public function shorts_cargo(){
    	return view('categories.shorts_cargo');
    }

    public function sweaters(){
    	return view('categories.sweaters');
    }

    public function tank_top(){
    	return view('categories.tank_top');
    }

    public function t_shirts(){
    	return view('categories.t_shirts');
    }
}
