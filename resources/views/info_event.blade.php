@extends('layouts.nav_bar')
@extends('layouts.side_bar')
@section('info_event')
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Material Dashboard Heading</h4>
              <p class="card-category">Created using Roboto Font Family</p>
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  <h2>info</h2> 
                </div>
                <div class="row">
                  <div class="tim-typo">
           
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                 


                   <form action="" method="post" role="form" name="Info" class="contactForm" action="/info_event" enctype="multipart/form-data">
                     
                      @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name"  placeholder="Category Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
             
             <div class="form-group">
              <input type="text" class="form-control" name="url" id="url"  placeholder="URL" />
              
            </div>

            </div>
    




                      <div><br/>
             <myHero><label for="photo">Sélectionner des images </label>
             <input type="file" id="image_uploads" name="photo" class="form-control" multiple></myHero>
                     </div><br/>



            <div class="form-group">
              <textarea class="form-control" name="description"  rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><input type="submit" class="form-control btn btn-danger" value="Add" /> </div>
          </form>



                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
      @endsection