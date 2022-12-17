<?php

namespace visitboard\Http\Controllers;

use Illuminate\Http\Request;

use visitboard\Http\Requests;

use Image;

use Auth;
 
use visitboard\Placedetail; 

class PlacedetailController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id)
    {
        $data = Placedetail::get_view_line($id);
        return view('place-details')->with('welcome', $data); 
    }
}
