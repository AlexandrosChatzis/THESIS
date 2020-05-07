<?php

namespace App\Http\Controllers\Auth;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/choose_application_type';
   protected function authenticated($request, $user){

    if(auth()->check() && $request->user()->admin == 0){
        return redirect()->action('StudentController@choose_application_type');
        
    }else if(auth()->check() && $request->user()->admin == 1){
         
        return redirect()->action('StudentController@application_type');
        
    }else if(auth()->check() && $request->user()->admin == 3){
         
        return redirect()->action('StudentController@give_privilege');
    }else{
        return view('/login');
    }


    
  }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return 'aem';
    }
}
