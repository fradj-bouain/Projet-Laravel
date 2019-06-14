 @extends('layouts.statique')

@section('editviw')

<!--==========================
      creation event Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Espace event</h3>
          <p>Publier votre événement. Vous organisez un événement et souhaitez le rendre visible sur notre site? Rien de plus simple !</p>
        </div>



        <div class="form">
          <div id="sendmessage"> evénment envoyée merci!</div>
          <div id="errormessage"></div>

                   <form  action=""  method="post" role="form"  name="Category" class="contactForm" action="/Creation Evenment.$category->id" enctype="multipart/form-data">
                     <input type="hidden" name="_method" value="PUT">
                      @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" placeholder="Category Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
             
             <div class="form-group">
              <input type="text" class="form-control" name="url" id="url" value="{{ $category->url }}" placeholder="URL" />
              
            </div>

            </div>

                       <div>
    <myHero><label for="photo">Sélectionner des images </label>
    <input type="file" id="image_uploads" name="photo"  multiple></myHero>
  </div>

  
    
            <div class="form-group">
              <textarea class="form-control" name="description"  rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description"> {{ $category->description }}</textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><input type="submit" class="form-control btn btn-danger" value="Modify" /> </div>
          </form>



</div>

      </div>
    </section><!-- #contact -->

@endsection