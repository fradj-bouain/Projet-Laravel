<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;

class ContactController extends Controller
{

 public function index (){
  
      $contact = Contact::all();
  
     return view('table_contact',['contacts' => $contact]);

  }

public function store (Request $Request){

             $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'email' => 'required|min:5',
        'subject' => 'required||min:5',
    ]);


       $contact =new Contact();       
       $contact->name = $Request->input('name');
       $contact->email = $Request->input('email');
       $contact->subject = $Request->input('subject');
       $contact->message = $Request->input('message');
       $contact->save();
      
       
     session()->flash('success','le category a ete bien enrigistre !!');
           
           return redirect('Contact');     
         }



    public function destroy($id){

           $contact = Contact::find($id);
         
         $contact->delete();
         
            return redirect ('table_contact');

     }
    

}
