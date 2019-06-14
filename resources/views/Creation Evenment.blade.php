 @extends('layouts.statique')

@section('Creation Evenment')

<!--==========================
      creation event Section
    ============================-->

    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Espace event</h3>
          <br/> <br/>
        </div>

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  

        <div class="form">
          <div id="sendmessage"> evénment envoyée merci!</div>
          <div id="errormessage"></div>
                             <form  method="post"  action="/Creation Evenment" role="form"  name="Creation Evenment" enctype="multipart/form-data" >
                     
                      @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name"  placeholder="Category Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
             
             <div class="form-group">
              <input type="text" class="form-control" name="url" id="url"  placeholder="URL" />
              
            </div>
                                  <div><br/>

          

             <myHero><label for="photo">Sélectionner des images </label>
             <input type="file" id="image_uploads" name="photo" class="form-control" multiple></myHero>
                     </div><br/>

 
  </div> <br/> 
                        
            </div>
    
            <div class="form-group">
              <textarea class="form-control" name="description"  rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description"></textarea>
              <div class="validation"></div>
            </div>
            <input type="submit" class="form-control btn btn-danger" value="Ajouter" />
          </form>
        </div>

      </div>
    </section><!-- #contact -->


   
@endsection