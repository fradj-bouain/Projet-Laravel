 @extends('layouts.statique')

@section('List event')

   <!--==========================
         EVENT
  ============================-->


    <section id="about">
      <div class="container">

         @if(session()->has('success'))
     <div class="alert alert-success">
       
       {{ session()->get('success')}}

     </div>
@endif

        <header class="section-header">
          <h3>Liste des evenments de sport</h3>
         
          <br/><br/>
  <a href="{{url('/Creation Evenment')}}" class="btn btn-success" style=" padding-right: 10% ;padding-left: 10%;">Ajouter</a><br/><br/>

        </header>


 
        <div class="row about-cols">
 @foreach($categories as $category)
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{ Storage::disk('local')->url($category ->photo) }}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">{{$category -> name}}</a></h2>
              <p>
                {{$category -> description}}

              </p>
               
              <p>
                {{$category -> id}}

              </p>
              <p>
                {{ $category ->  user['name'] }}
<button type="submit"  class="btn btn-default">Detaile</button> 
              </p>

            </div>


                             <form  method="post"  action="{{url($category->id.'/Liste des evenments')}}">   
                               @csrf
                                @method('DELETE')
                                 {{ method_field('DELETE') }}
                

  @can('delete',$category)              <button type="submit"  class="btn btn-danger" style="margin:-10px 10px  30px 0px">Supprimer</button> @endcan



 @can('update',$category)<a href="{{url($category->id.'/Creation Evenment')}}" class="btn btn-success" style="margin:-10px 10px  30px 0px">Edite</a> @endcan

                              </form>    


          </div>
           @endforeach
        </div>
  
 
      </div>
    </section><!-- #about -->

  @endsection