 <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Users connect</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>First_Name</th>
                      <th>Last_Name</th>
                      <th>Address</th>
                      <th>N°Tele</th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->adresse}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>@if($user->isOnline())
                            <li class="text-success">online
                            </li>
                            @else
                            <li class="text-muted">
                              offline
                            </li>
                           @endif 

                        </td>
                         <td>
                             

                              <form  method="post"  action="{{url($user->id.'/dashboard')}}">
                               
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