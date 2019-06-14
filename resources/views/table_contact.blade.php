@extends('layouts.nav_bar')
@extends('layouts.side_bar')


@section('table_contact')
      <div class="content">
        <div class="container-fluid">

@if(session()->has('success'))
     <div class="alert alert-success">
       
       {{ session()->get('success')}}

     </div>
@endif



<div class="row">
  <div class="col-md-12">
       <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Contacts</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>name</th>
                      <th>email</th>
                      <th>subject</th>
                      <th>message</th>
                    </thead>
                    <tbody>
                      @foreach($contacts as $contact)
                      <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                         <td>
                             

                              <form  method="post"  action="{{url($contact->id.'/')}}">
                               
                                @csrf
                                @method('DELETE')
                                 {{ method_field('DELETE') }}
                                  <button type="submit"  class="btn btn-danger">Supprimer</button>
                                

                              </form>          
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
               </div>


          </div>
        </div>
      </div>
         

     @endsection