<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\site;
use Illuminate\Http\Request;
use App\Inscription;


use Illuminate\Support\Facades\Auth;


class InscreptionController extends Controller
{

  

    
   public function index(){

      



   }


   public function create (){
     
      
   }


   public function store (Request $Request){


       $inscription =new Inscription();
       
       $inscription->nom = $Request->input('nom');
       $inscription->prenom = $Request->input('prenom');
       $inscription->email = $Request->input('email');
       $inscription->telephone = $Request->input('telephone');
       $inscription->password = $Request->input('password');
       $inscription->adresse = $Request->input('adresse');

       $inscription->save();
       $inscription->f;
   
      echo "succ";       
        

   }

   public function edite (){


   }


   public function update (){






   }

   public function destorv(){


   }






}
