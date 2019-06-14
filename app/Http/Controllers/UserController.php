<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Cache;

class UserController extends Controller
{
    
     public function index (){

      $user = User::all();
  
     return view('dashboard',['users' => $user]);

  }






  public function destroy( $id){

      $user = User::find($id);

    

   $user->delete();
   return redirect ('dashboard');

}


  

}
