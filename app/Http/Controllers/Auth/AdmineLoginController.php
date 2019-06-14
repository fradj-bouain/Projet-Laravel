<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdmineLoginController extends Controller
{


   public function ___construct()
   {
   	$this->middleware('guest:admine',['except'=>['logout']]);
   }

    public function showLoginForm()
    {

    	return view('auth.admine-login');


    }

   public function login( Request $request )
   {

   	$this->validate($request, [
   		'email' => 'required|email',
   	     'password' => 'required|min:6'
   	 ]);

           //Attempt to log the user on
    if(Auth::guard('admine')->attempt(['email' => $request->email, 'password' =>$request->password], $request->remember)){

    return redirect()->intended(route('admine.Dashboard'));

    }


    //if unsuccessful ,henredirectbackto the loginwith  the form data

    return redirect()->back()->withInput($request->only('email','remember'));


   }


    public function logout()
    {
        Auth::guard('admine')->logout();


        return  redirect('admine_login');
    }

}
