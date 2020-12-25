<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
          //Validate the form data
        $this->validate($request, [
          'email'        => 'required',
          'password'        => 'required|min:6'
        ]);

        //Attempt to log the employee in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1], $request->remember)) {

          //If successful then redirect to the intended location
          return redirect()->intended(route('home'));
        }

        //If unsuccessfull, then redirect to the admin login with the data
        Session::flash('login_error', "Invalid username / password");
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    // protected function credentials(Request $request)
    // {
    //     // return $request->only($this->username(), 'password');
    //     return ['email' => $request->{$this->username()}, 'password' => $request->password, 'status' => 1];
    // }
}
