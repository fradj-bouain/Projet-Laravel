@extends('layouts.nav_bar')
@extends('layouts.side_bar')
@section('tables_info')
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
                  <h4 class="card-title mt-0"> Table de info</h4>
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
                    @foreach($infos as $info)
                        <tr>
                          <td>
                          {{$info -> id}}
                          </td>
                          <td>
                            {{$info -> name}}
                          </td>
                          <td>
                            {{$info -> url}}
                          </td>
                          <td>
                           {{$info -> description}}
                          </td>
                          <td>
                            image
                          </td>
                           <td>     
                              <form  method="post"  action="{{url($info->id.'/tables_info')}}">
                               
                                @csrf
                                @method('DELETE')
                                 {{ method_field('DELETE') }}
                                  <button type="submit"  class="btn btn-danger">Supprimer</button>
                                <a href="{{url($info->id.'/info_event')}}" class="btn btn-default">Edite</a>

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