<?php

namespace visitboard\Http\Controllers;

use Illuminate\Http\Request;

use visitboard\Http\Requests;

use visitboard\Extrashot;

use Validator;

use Image;

use Auth;

class ExtrashotController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $data = Extrashot::get_view();
        return view('extra-shot')->with('welcome', $data); 
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function post($id)
    {
        $data = Extrashot::get_view_line($id);
        return view('extra')->with('welcome', $data);
    }

    
    /**
     * post upload
     *
     * @return void
     */
    public function travel_publish_post(Request $request)
    {     
    $validator = Validator::make($request->all(), [
            'img_url_one' => 'required| mimes:jpg,jpeg,bmp,png',
            'img_url_two' => 'required| mimes:jpg,jpeg,bmp,png',
            'img_url_tee' => 'required| mimes:jpg,jpeg,bmp,png',
            'img_url_for' => 'required| mimes:jpg,jpeg,bmp,png',
            'img_url_fve' => 'required| mimes:jpg,jpeg,bmp,png',
            'hd_name' => 'required|max:255',
            'ab_details' => 'required|max:1255',
            'loc_watch' => 'required|max:1255',
            'r_cipies' => 'required|max:1255',
            'l_hotels' => 'required|max:1255',
            'best_points' => 'required|max:1255',
        ]);

        if ($validator->fails()) {
            return 'fail';
        }

        
        $img_url_one = $request->file('img_url_one');
        $img_url_two = $request->file('img_url_two');
        $img_url_tee = $request->file('img_url_tee');
        $img_url_for = $request->file('img_url_for');
        $img_url_fve = $request->file('img_url_fve');

        $filename1 = time() . '.' . $img_url_one->getClientOriginalExtension();
        $filename2 = time() . '.' . $img_url_two->getClientOriginalExtension();
        $filename3 = time() . '.' . $img_url_tee->getClientOriginalExtension();
        $filename4 = time() . '.' . $img_url_for->getClientOriginalExtension();
        $filename5 = time() . '.' . $img_url_fve->getClientOriginalExtension();

        Image::make($img_url_one)->resize(600, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/travel-image-1/' . $filename1 ) );
        Image::make($img_url_two)->resize(400, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/travel-image-2/' . $filename2 ) );
        Image::make($img_url_tee)->resize(400, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/travel-image-3/' . $filename3 ) );
        Image::make($img_url_for)->resize(400, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/travel-image-4/' . $filename4 ) );
        Image::make($img_url_fve)->resize(400, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/travel-image-5/' . $filename5 ) );
        
        $user = new Extrashot();
        $user->hd_name = strip_tags($request->input('hd_name'));
        $user->ab_details = strip_tags($request->input('ab_details'));
        $user->loc_watch = strip_tags($request->input('loc_watch'));
        $user->r_cipies = strip_tags($request->input('r_cipies'));
        $user->l_hotels = strip_tags($request->input('l_hotels'));
        $user->best_points = strip_tags($request->input('best_points'));

        $user->img_url_one = $filename1;
        $user->img_url_two = $filename2;
        $user->img_url_tee = $filename3;
        $user->img_url_for = $filename4;
        $user->img_url_fve = $filename5;
        $user->user_id = Auth::user()->id;

        $user->save();

        return redirect('/extra/' . $user->id);

    }
}
