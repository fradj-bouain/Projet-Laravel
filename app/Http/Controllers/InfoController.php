<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Info;
use Auth;

class InfoController extends Controller
{
   public function index (){

     $listcategory = info::all();
     return view('tables_info',['infos' => $listcategory]);

  }

  public function indexviw (){

     $listcategory = info::all();
     return view('info',['infos' => $listcategory]);

  }


   public function store (Request $Request){



       $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);



       $info =new Info();
       
       $info->name = $Request->input('name');
       $info->url = $Request->input('url');


        if($Request->hasFile('photo')){

       $info->photo =   $Request->photo->store('public');
       }


       $info->description = $Request->input('description');
      

      

       $info->save();
      
          
        
     session()->flash('success','le category a ete bien enrigistre !!');
           
           return redirect('tables_info');     
        

   }



    public function edit ($id){

     $category = Info::find($id);

     return view('/edit_info' , ['tables_info' => $category]);
   


   } 



  public function update (Request $Request , $id){



      $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);
     
  

    $info = Info::find($id);

    $info->name = $Request->input('name');
    $info->url = $Request->input('url');
    $info->description = $Request->input('description');

    $info->save();

    return redirect('tables_info');

   }




public function destroy(Request $Request , $id){

   
   $info = Info::find($id);
   $info->delete();
   return redirect ('tables_info');

}

}
