<?php

namespace visitboard\Http\Controllers;

use Illuminate\Http\Request;

use visitboard\Http\Requests;

use Image;

use Auth;
 
use visitboard\Place; 

class PlaceController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id)
    {
        $data = Place::get_view_line($id);
        return view('place-prticular')->with('welcome', $data); 
    }
}
