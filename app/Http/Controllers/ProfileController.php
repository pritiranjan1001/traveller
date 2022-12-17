<?php

namespace visitboard\Http\Controllers;

use Illuminate\Http\Request;

use visitboard\Status;

use visitboard\View;

use Validator;

use Auth; 

use Image;
  
class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** 
     *
     */ 
    public function index()
    {
        $data = View::get_profile_view();
        $status = Status::where('user_id', '=', Auth::user()->id)->first(); 
        return view('profile')->with('user', Auth::user())
                              ->with('post_data', $data)
                              ->with('status', $status->status);
    }

    /**
    profile avatar change
    *
    */ 
    public function update_avatar(Request $request){

        $validator = Validator::make($request->all(), [
            'avatar' => 'required| mimes:jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return 'fail';
        }

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('' . $filename ) , 30 );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
            return response($user->avatar);
        }
        return 'fail';
    }
    

    public function update_status(Request $request){

        try 
        {
        $status = Status::where('user_id', '=', Auth::user()->id)->first();
        $status->status = strip_tags($request->input('status'));
        $status->save();

        return $status->status;
        } 
        catch (Exception $e) 
        {
            echo "fails to update";
            exit;
        }
        
    }

}
