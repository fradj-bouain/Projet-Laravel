<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Salle;
use Auth;

class SalleController extends Controller
{


 public function indexacue (){

      $listcategory = salle::all();
  
     return view('Acceuil',['salles' => $listcategory]);

  }




       public function indexviw (){

      $listcategory = salle::all();
  
     return view('Liste de salle',['salles' => $listcategory]);

  }




     public function index (){

      $listcategory = salle::all();
  
     return view('tables_salle',['salles' => $listcategory]);

  }





   public function store (Request $Request){

             $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);


       $category =new Salle();       
       $category->name = $Request->input('name');
       $category->url = $Request->input('url');
        if($Request->hasFile('photo')){

       $category->photo =   $Request->photo->store('public');
       
      
       }
       else{echo "pas dimage";}

       $category->description = $Request->input('description');
         
       $category->save();
      
       
     session()->flash('success','le category a ete bien enrigistre !!');
           
           return redirect('Liste de salle');     
         }



    


    public function edit ($id){

     $salle = Salle::find($id);

     $this -> authorize('update',$salle);

     return view('/edit_salle' , ['salle' => $salle]);
   
   } 








  public function update (Request $Request , $id){


      $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);

      
    $salle = Salle::find($id);
    $salle->name = $Request->input('name');
    $salle->url = $Request->input('url');
    $salle->description = $Request->input('description');

    $salle->save();

    return redirect('tables_salle');

   }






public function destroy(Request $Request , $id){

      $salle = Salle::find($id);
    $this -> authorize('update',$salle);
   $salle->delete();
   return redirect ('Liste de salle');

}


}
