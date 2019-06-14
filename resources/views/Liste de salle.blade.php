 @extends('layouts.statique')

@section('List salle')
  <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

         @if(session()->has('success'))
     <div class="alert alert-success">
       
       {{ session()->get('success')}}

     </div>
@endif

        <header class="section-header">
          <h3>Liste de salle de sport</h3>
     

     <br/><br/><br/><br/>
  @can('create')<a href="{{url('/salle_event')}}" class="btn btn-success">Ajouter</a>@endcan
<br/><br/>
        </header>


 
        <div class="row about-cols">
 @foreach($salles as $salle)
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">

                
             
                 <img src="{{ Storage::disk('local')->url($salle ->photo) }} " alt="" class="img-fluid">

                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">{{$salle -> name}}</a></h2>
              <p>
                {{$salle -> description}}

              </p>
               
              <p>
                {{$salle -> id}}

              </p>
              <p>
                {{ $salle ->  user['name'] }}
<button type="submit"  class="btn btn-default" ">Detaile</button> 
              </p>

            </div>


                             <form  method="post"  action="{{url($salle->id.'/Liste de salle')}}">   
                               @csrf
                                @method('DELETE')
                                 {{ method_field('DELETE') }}
                

  @can('delete',$salle)              <button type="submit"  class="btn btn-danger" style="margin:-10px 10px  30px 0px">Supprimer</button> @endcan



 @can('update',$salle)<a href="{{url($salle->id.'/salle_event')}}" class="btn btn-success" style="margin:-10px 10px  30px 0px">Edite</a> @endcan

                              </form>    


          </div>
           @endforeach
        </div>
  
 
      </div>
    </section><!-- #about -->

@endsection