@extends('layouts.nav_bar')
@extends('layouts.side_bar')
@section('tables_salle')
      <div class="content">
        <div class="container-fluid">

 @if(session()->has('success'))
     <div class="alert alert-success">
       
       {{ session()->get('success')}}

     </div>
@endif
         
          <div class="row">
           <div class="col-md-12">   
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table de Salle</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Url
                        </th>
                        <th>
                          Descreption
                        </th>
                        <th>
                          Salary
                        </th>
                         <th>
                          Action
                        </th>
                      </thead>
                      <tbody>

                    @foreach($salles as $salle)
                        <tr>
                          <td>
                          {{$salle -> id}}
                          </td>
                          <td>
                            {{$salle -> name}}
                          </td>
                          <td>
                            {{$salle -> url}}
                          </td>
                          <td>
                           {{$salle -> description}}
                          </td>
                          <td>
                            image
                          </td>
                           <td>
                             

                              <form  method="post"  action="{{url($salle->id.'/tables_salle')}}">
                               
                                @csrf
                                @method('DELETE')
                                 {{ method_field('DELETE') }}
                                  <button type="submit"  class="btn btn-danger">Supprimer</button>
                                <a href="{{url($salle->id.'/salle_event')}}" class="btn btn-default">Edite</a>

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
      </div>
         

     @endsection