 @extends('layouts.statique')

@section('Info')

   <!--==========================
    actuellite
  ============================-->




   <!--==========================
     1er SECTION
  ============================-->

    <section id="about">
      <div class="container">



        <header class="section-header">
          <h3>Liste des acteulites de sport</h3>
     <br/><br/><br/><br/>
        
  

        </header>


 
        <div class="row about-cols">
 @foreach($infos as $info)
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{ Storage::disk('local')->url($info ->photo) }}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">{{$info -> name}}</a></h2>
              <p>
                {{$info -> description}}

              </p>
               
              <p>
                {{$info -> id}}

              </p>
              <p>
                {{ $info ->  user['name'] }}

                <button type="submit"  class="btn btn-default">Detaile</button> 

              </p>

            </div>

          </div>

           @endforeach
        </div>
  
 
      </div>
    </section><!-- #about -->



 <!--==========================
     2em SECTION
  ============================-->


 

@endsection