<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Category;
use App\User;
use auth;
use Illuminate\Support\Facades\Storage;
use app\Http\Requests;
use App\Notifications\newnotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Notification;


class CategoryController extends Controller
{
 /**
     * The event dispatcher instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
   
 public $notif;
 public function indexviw (){
  
      $listcategory = Category::all();
  
     return view('Liste des evenments',['categories' => $listcategory]);

  }

 





  public function index (){
  
      $listcategory = Category::all();
      
  
     return view('tables',['categories' => $listcategory]);

  }






   public function storeviw (Request $Request  ){

    

             $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);


       $category =new Category();       
       $category->name = $Request->input('name');
       $category->url = $Request->input('url');
                  if($Request->hasFile('photo')){

       $category->photo =   $Request->photo->store('public');

       }
       $category->description = $Request->input('description');
 
           $category->user_id = auth::user()->id;

       
          

if ($category->save()) {
  

  $user =User::all();
  Notification::send($user , new newnotification($category));
}

       

       
     echo"le category a ete bien enrigistre !!";
           
             
           return redirect('Liste des evenments');    
     session()->flash('success','le category a ete bien enrigistre !!');


    
         }






   public function store (Request $Request ){

             $validatedData = $Request->validate([
        'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);



       $category =new Category();       
       $category->name = $Request->input('name');
       $category->url = $Request->input('url');
         if($Request->hasFile('photo')){

       $category->photo =   $Request->photo->store('public');
       }
       $category->description = $Request->input('description');
         
       $category->save();

      
 
echo "ss".$notif;
     session()->flash('success','le category a ete bien enrigistre !!');
           
           return redirect('tables');     
         }







public function editviw ($id){

     $category = Category::find($id);

     $this -> authorize('update',$category);

     return view('/editviw' , ['category' => $category]);
   
   } 






    public function edit ($id){

     $category = Category::find($id);

     $this -> authorize('update',$category);

     return view('/edit' , ['category' => $category]);
   
   } 








    public function updateviw (Request $Request , $id){


        $validatedData = $Request->validate([
         'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);

    $category = Category::find($id);
    $category->name = $Request->input('name');
    $category->url = $Request->input('url');
    $category->description = $Request->input('description');

    $category->save();

    return redirect('Liste des evenments');

   }









    public function update (Request $Request , $id){


        $validatedData = $Request->validate([
         'name' => 'required|min:5',
        'url' => 'required|min:5',
        'description' => 'required||min:5',
    ]);

    $category = Category::find($id);
    $category->name = $Request->input('name');
    $category->url = $Request->input('url');
    $category->description = $Request->input('description');

    $category->save();

    return redirect('tables');

   }






    public function destroy(Request $Request , $id){

           $category = Category::find($id);
         $this -> authorize('update',$category);
         $category->delete();
            return redirect ('tables');

     }



}
