<?php

namespace visitboard\Http\Controllers\Auth;

use visitboard\User;
use visitboard\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Mail;
use Auth;
use visitboard\Status;
use Socialite;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User;
            
        $user->name=$data['name'];
        $user ->email=$data['email'];
        $user->password=bcrypt($data['password']);
        $user->save();

        $status = new Status;
        $status->user_id = $user->id;
        $status->save();
        return $user;
    }
    

    public function register(Request $request){
        $input = $request->all();
        $validator = $this ->validator($input);

        if ($validator->passes()) {
            $user =$this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('user_activations')->insert(['user_id'=>$user['id'],'token'=>$user['link']]);
            Mail::send('emails.activation',$user,function($message) use ($user){
                $message->to($user['email']);
                $message->subject('www.test.com - Activation Code');
            });
            return redirect()->to('login')->with('success'," we sent activation code. Please check the code in your email ");

        }

        //return back()->with('error',$validator->errors());
        return redirect()->to('/register')->withErrors($validator);
    }




    public function userActivation($token){
        $check = DB::table('user_activations')->where('token',$token)->first();
        if (!is_null($check)) {
       $user = User::find($check->user_id);
       if ($user->is_activated == 1) {
           return redirect()->to('login')->with('success'," user is already activated ");
          }
          $user->update(['is_activated'=> 1]);
          DB::table('user_activations')->where('token',$token)->delete();
         return redirect()->to('login')->with('success'," user is activated successfully ");
         
        }
        return redirect()->to('login')->with('Warning'," your token is invalid ");
         
    }



   

    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {


        try{
        $user = Socialite::driver('facebook')->user();
         }
         catch(Exception $e)

            {
         return redirect('auth/facebook');
            }

        $authUser = $this->findOrCreateUser($user);
 
        Auth::login($authUser, true);
 
        return redirect('/home');

    }

     private function findOrCreateUser($socialUser){

        // $authUser = User::where('facebook_id',$socialUser->getId())->first();
         $authUser = User::where('facebook_id', $socialUser->id)->first();
            
        if ($authUser){
            return $authUser;
        }
 
            $user = new User;
            $user->name=$socialUser->name;
            $user->email=$socialUser->email;
            $user->facebook_id=$socialUser->id;
            //'password' => $socialUser->password,
            $user->avatar=$socialUser->avatar;
            $user->save();

            $status = new Status;
            $status->user_id = $user->id;
            $status->save();
            return $user;
        // $user->token;

        // return $user -> getEmail();
    }

}


