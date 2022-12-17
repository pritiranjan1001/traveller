<?php

namespace visitboard\Http\Controllers; 

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use visitboard\Http\Requests;

use Validator;

use Image;

use Auth;

use Session;

use visitboard\View; 
use visitboard\User; 

class HomeController extends Controller
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function index() 
    {
        $data = View::get_view();
        return view('welcome')->with('welcome', $data); 
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function post($id) 
    {
        $data = View::get_view_line($id);
        return view('views')->with('welcome', $data);
    }


  
    /**
     * post upload
     *
     * @return void
     */
    public function travel_upload_post(Request $request)
    { 

    //$messages = array(
    //    'required' => 'The image is really required.',
    //);   
 
    $validator = Validator::make($request->all(), [
            'im_url' => 'mimes:jpg,jpeg,bmp,png',
            'bt_url' => 'mimes:jpg,jpeg,bmp,png',
            'btimg_url' => 'mimes:jpg,jpeg,bmp,png',
            'hd_name' => 'required|max:255',
            'ab_details' => 'required|max:1255',
            'q_otes' => '',
            'v_hours' => '',
            'a_ddress' => '',
            'best_points' => '',
            'r_cipies' => '',
            'l_address' => '',
        ]);


      if ($validator->fails()) {
            return redirect('/create-post')
                        ->withErrors($validator)
                        ->withInput();

        //return Redirect::back()->with('error_code', 1);                
        }
        try {
        $filename1="default.png";
        $filename2="default.png";
        $filename3="default.png";

        if ($request->hasFile('im_url')){
        $im_url = $request->file('im_url');
        $filename1 = time() . '.' . $im_url->getClientOriginalExtension();
        Image::make($im_url)->resize(700, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/post-1/' . $filename1 ));
        }

        if ($request->hasFile('bt_url')){
        $bt_url = $request->file('bt_url');
        $filename2 = time() . '.' . $bt_url->getClientOriginalExtension();
        Image::make($bt_url)->resize(700, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/post-2/' . $filename2 ));
        }

        if ($request->hasFile('btimg_url')){
        $btimg_url = $request->file('btimg_url');
        $filename3 = time() . '.' . $btimg_url->getClientOriginalExtension();
        Image::make($btimg_url)->resize(700, null, function ($constraint){
        $constraint->aspectRatio();})->save( public_path('/upload/post-3/' . $filename3 ));
        }

  
        $user = new View();
        $user->hd_name = strip_tags($request->input('hd_name'));
        $user->ab_details = strip_tags($request->input('ab_details'));
        $user->q_otes = strip_tags($request->input('q_otes'));
        $user->v_hours = strip_tags($request->input('v_hours'));
        $user->a_ddress = strip_tags($request->input('a_ddress'));
        $user->best_points = strip_tags($request->input('best_points'));
        $user->r_cipies = strip_tags($request->input('r_cipies'));
        $user->l_address = strip_tags($request->input('l_address'));
        $user->im_url = $filename1;
        $user->bt_url = $filename2;
        $user->btimg_url = $filename3;
        $user->user_id = Auth::user()->id;

        $user->save();
        
        return redirect('/view/' . $user->id);
        
        } catch (Exception $e) {
            Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }

    /**
     * Delete a Post
     *
     * @return void
     */
    public function destroy($id)
    {
        // delete
        $data = View::find($id);
        $data->delete();
        return back();
    }

    /**
     * Get the values of the post.
     *
     * @return void
     */

    public function edit($id)
    {
        

        $data = View::get_view_user_id($id); 
        // show the edit form and pass the nerd
        return View('edit-form')
                ->with('welcome', $data);
    }


    public function update(Request $request,$id)
    {
        

        $rules = array(
            /*'im_url' => 'required| mimes:jpg,jpeg,bmp,png',
            'bt_url' => 'required| mimes:jpg,jpeg,bmp,png',
            'btimg_url' => 'required| mimes:jpg,jpeg,bmp,png',*/
            'hd_name' => 'required|max:255',
            'ab_details' => 'required|max:1255',
            'q_otes' => '',
            'v_hours' => '',
            'a_ddress' => '',
            'best_points' => '',
            'r_cipies' => '',
            'l_address' => '',
        );
        
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
                return redirect('/edit-form/{id}')
                ->withErrors($validator);
        } try {
            // store

            $post = View::find($id);
            $post->hd_name = Input::get('hd_name');
            $post->ab_details = Input::get('ab_details');
            $post->q_otes = Input::get('q_otes');
            $post->v_hours = Input::get('v_hours');
            $post->a_ddress = Input::get('a_ddress');
            $post->best_points = Input::get('best_points');
            $post->r_cipies = Input::get('r_cipies');
            $post->l_address = Input::get('l_address');
            $post->user_id = Auth::user()->id;
            $post->save();
            // redirect
            //Session::flash('message', 'Successfully updated');
            return redirect('/view/' . $post->id);
        } 

        catch (Exception $e) {
            Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
                       
    }

    /**
     * Like a post.
     *
     * @return void
     */
    public function like(Request $r)
    {   
    $post_id = $r->input('post_id');
    $post->user_id = Auth::user()->id;
    $post = new Like();
    $post->post_id=$post_id;
    $post->vote=1;
    $post->save();
    }

}
 