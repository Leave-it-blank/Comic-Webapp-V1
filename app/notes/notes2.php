<div class="container-fluid" style="min-height: 800px;">
    
    <div class="row justify-content-center">
  <!--   <div class="card" id="user_profile_pic">
            
            <img src="storage/profile_page/6809.jpg">
           </div> -->
        <div class="col-md-8" id="user_profile_pic">
            <div class="card" style="background-color:transparent" >   <!-- add styles to background table here -->
                <div  ></div>

              
              

                
            <!-- bead come don't touch yet -->
                <div aria-label="breadcrumb">
                       <ol class="breadcrumb bg-dark" style="max-width: auto; !important">
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('Profile') }}</li>
                        </ol>
                 <div class="card text-white bg-dark mb-3 " style="max-width: auto;">

                      <h6 class="card-header d-flex align-items-center py-2">
                         <span class="fas fa-user fa-fw " aria-hidden="true"></span>      
                         <span class="mx-1">{{ Auth::user()->username }}</span>
                         <span class="rounded flag flag-gb" title="English"></span>    
                           <a class="ml-auto" target="_blank" href="#">
                         <span class="fas fa-rss fa-2x"></span></a> 
                      </h6>
                

                       <div class class="container">
                        <table class="table"  width="auto" cellspacing="2">
        
                                <thead>
            
            
                                    <th>Uniqu ID</th>
                                    <th>UserName</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Created</th>
                                   
                                   </thead>

                                   <tr>
                                    <td>{{ Auth::user()->id }}</td>
                                    <td>{{ Auth::user()->username }}</td>
                                    <td>{{ Auth::user()->name }}</td>

                                    <td>{{ Auth::user()->Country }}</td>
                                    <td>{{ Auth::user()->email }}</td>
                                    <td>{{ Auth::user()->roles->pluck( 'name' ) }}</td>
                                <!--    @auth
                                   @foreach ($users as $user)
                                    @csrf
                                    <td>{{ Auth::user()->getRoleNames()  }}</td>
                                    @endforeach
                                    @endauth -->
                                    <td>{{ Auth::user()->created_at }}</td>
                                   </tr>
                    

                         </table>
                         </div>
                         </div>
                         </div>
                         </div>
                         </div>
                         </div>
</div>



 <!-- Page Wrapper -->
 <div id="wrapper">
  
      
  <!-- Begin Page Content -->
  <div class="container-fluid" >
  <div aria-label="breadcrumb" style=" text-align: right;">
               <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
             <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
             <li class="breadcrumb-item active" aria-current="page">{{ __('Users') }}</li>
                </ol>
</div>

<!--    <!-- Page Heading --
    <div style="padding-bottom: 1.2cm">
    <h1 class="h3 mb-2 text-black-800">Users Management</h1>
  </div>

    <!-- DataTales Example --
    <div class="card shadow mb-4" style="background-color:transparent" >   <!-- add styles to background table here --
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User List</h6>






        
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">  <!-- add styles to table here --
      <div class="card-header py-3">
            <thead>


                <th>Uniqu ID</th>
                <th>UserName</th>
                <th>Name</th>
                <th>Country</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
               </thead>
         <tbody>

           
                
                
            
            <tr>
              @foreach ($users as $user)
              <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->name }}</td>

              <td>{{ $user->country }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->is_admin }}</td>
              <td>{{ $user->created_at }}</td>
              <td><a class="btn btn-primary" onclick="return confirm('Are you sure?')" href = 'edit/{{ $user->id }}'><i class="fa fa-edit"></i></a></td>
              <td><a class="btn btn-danger" onclick="return confirm('Are you sure? you may loose access to panel.')" href = 'delete/{{ $user->id }}'><i class="fa fa-trash"></a></td>
            </tr>
            @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid --

</div>
<!-- End of Main Content -->
<div class="container-fluid">
    <div class="card"  style="background-color:transparent">
        <div class="card-body" >
            <div class="row">
                <div class="col-md-2 border-right">
                    <h4>User Management</h4>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-sm btn-primary">Add User</button>
                </div>
                
            </div>
            <div class="row" >
                <div class="col-md-12">
                    <table class="table table-hover ">
                        <thead class="" >
                          <tr>
                            <th>
                              <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">
                                   </label>
                               </div>
                            </th>  
                            <th>UserID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Country</th>
                            <th>Join on</th>
                            <th></th>
                           
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          @foreach ($users as $user)
                          <tr>  
                          <td>
                                <div class="form-check-inline">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="" >
                                   </label>
                               </div>
                            </td>  
                            <td><a href="#"><small>{{ $user->id }}</small></a></td>
                            <td><small>{{ $user->name }}</small></td>
                            <td><small>{{ $user->email }}</small></td>
                            <td><small>{{ implode(',' , $user->roles() ->get() ->pluck('name') ->toArray()) }}</small></td>
                            <td><small>{{ $user->country }}</small></td>
                            <td><small>{{ $user->created_at }}</small></td>

                          
                            
                            <td>
                            <a class="btn btn-link" onclick="return confirm('Are you sure?')" href="{{route('admin.users.edit', $user->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                <button class="btn btn-link" onclick="return confirm('you dont have access to view this!')"  href="#"><i class="fa fa-eye"></i></button>
                               
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                              @csrf
                               {{ method_field('Delete')}}
                            <button type="submit"  class="btn btn-link" onclick="return confirm('Are you sure? you may loose access to panel.')">   <i class="fa fa-trash"></i> </button>
                               </form

                              
                            

                              </td>
                             </tr>
                            @endforeach
                          </tr>
                          <tr>
                            
                    
                         
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

comics index

<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('Comics') }}</li>
                        </ol>
        </div>

<div class="container-fluid">
		    <div class="card"  style="background-color:transparent">
		        <div class="card-body" >
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>Comics</h4>
		                </div>
		                <div class="col-md-6">
		              <a href="{{ route('admin.comics.create')}}">   <button type="button" class="btn btn-sm btn-primary">Add Comic</button></a>
		                </div>
		                
		            </div>
		            <div class="row" >
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="" >
                                  <tr>
                                    
                                    <th>Comic-ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Artist</th>
                                    <th>Country</th>
                                    <th>View</th>
                                    
                                    <th>Edit</th>
                                    <th>Remove</th>
                                   
                                   
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  
                                      <tr>  
                                            
                                          @foreach($comics as $comic)
                                              <tr>
                                              <td>{{$comic->id}}</td>
                                              <td>{{$comic->title}}</td>
                                              <td>{{$comic->desc}}</td>
                                              <td>{{$comic->author}}</td>
                                              <td>{{$comic->artist}}</td>
                                              <td>{{$comic->country}}</td>
                                              <td><a href="{{ route('admin.comics.show',$comic->id)}}" class="btn btn-light">view</a></td>
                                              
                                              <td>
                                                <a href="{{ route('admin.comics.edit',$comic->id)}}" class="btn btn-primary">Edit</a>
                                              </td>
                                              <td>
                                                 <form action="{{ route('admin.comics.destroy', $comic->id)}}" method="post">
                                                      @csrf
                                                         @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                  </form>
                                             </td>
                                     </tr>
                                             @endforeach
                                    

                                      </td>
                                     </tr>
                                  
                                  </tr>
                                  <tr>
                                    
                            
                                 
                                 
                                </tbody>
                              </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    </div>


    show comics password_get_info


    <div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/comics">{{ __('Comics') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('View') }}</li>
                     <li class="breadcrumb-item active" aria-current="page">{{ $comics ->id  }}</li>
                     <li class="breadcrumb-item active" aria-current="page">{{  $comics ->title }}</li>
                        </ol>

<div class="row" >
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="" >
                                  <tr>
                                    
                                    <th>Comic-ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Artist</th>
                                    <th>Country</th>
                                    <th>Views Volume</th>
                                    <th>Action</th>
                                    
                                   
                                   
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  
                                      <tr>  
                                            
                                          
                                              <tr>
                                              <td>{{$comics->id}}</td>
                                              <td>{{$comics->title}}</td>
                                              <td>{{$comics->desc}}</td>
                                              <td>{{$comics->author}}</td>
                                              <td>{{$comics->artist}}</td>
                                              <td>{{$comics->country}}</td>
                                              <td><a href="{{ route('admin.chapter.index', $comics->id)}}" class="btn btn-light">View Chapters</a></td>
                                              
                                              <td><a href="#" class="btn btn-light">DELETE</a></td>
                                              
                                           
                                     </tr>
                                           
                                    

                                      </td>
                                     </tr>
                                  
                                  </tr>
                                  <tr>
                                    
                            
                                 
                                 
                                </tbody>
                              </table>
                              </div>
      <!--   <form action="{{ route('admin.comics.destroy', $comic->id)}}" method="post">
                                                      @csrf
                                                         @method('DELETE')
                                                    <button class="text-indigo-600 hover:text-indigo-900 btn " type="submit">Delete</button>
                                                  </form>
              </td> 
                <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('admin.comics.edit',$comic->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>-->


            view chapter index

            <div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="{{ route('admin.comics.index', ['id' => $comics->id]) }}">{{ __('Comic') }}</a></li>
                     <li class="breadcrumb-item"><a href="{{ route('admin.comics.show', ['comic' => $comics->id]) }}">{{ $comics->title}}</a></li>
                     <li class="breadcrumb-item"><a href="{{ route('admin.chapter.index', ['id' => $comics->id]) }}">{{ __('chapters') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('View') }}</li>
              
                     <li class="breadcrumb-item active" aria-current="page">{{ __('chapter') }}</li>
                        </ol>
<div class="container-fluid">
		    <div class="card"  style="background-color:transparent">
		        <div class="card-body" >
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>Chapters</h4>
		                </div>
		                <div class="col-md-6">
		              <a href="{{ route('admin.chapter.create', ['id' => $comics->id ])}}">   <button type="button" class="btn btn-sm btn-primary">Add Chapter</button></a>
		                </div>
		                
		            </div>
		            <div class="row" >
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="" >
                                  <tr>
                                    
                                    <th>Chapter-ID</th>
                                    <th>Number</th>
                                    <th>Title</th>
                                    <th>Volume</th>
                                    
                                    
                                    <th>Edit</th>
                                    <th>Remove</th>
                                   
                                   
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  
                                      <tr>  
                                            
                                   
                                      @foreach($chapters as $chapter)
                                              <tr>
                                              <td>{{$chapter->id}}</td>
                                              <td>{{$chapter->number}}</td>
                                              <td>{{$chapter->title}}</td>
                                              <td>{{$chapter->volume}}</td>
                                           
                                              <td><a href="#" class="btn btn-light">view</a></td>
                                              
                                              <td>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                              </td>
                                              <td>
                                                 <form action="{{ route('admin.chapter.destroy', [$comics->id , $chapter->id])}}" method="post">
                                                      @csrf
                                                         @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                  </form>
                                             </td>

                                            
                                             @endforeach

                                        
                                     </tr>
                                  
                                  </tr>
                                  <tr>
                                    
                            
                                 
                                 
                                </tbody>
                              </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    </div>
    </div>

carousel show index page



<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/features">{{ __('Features') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('Carousel') }}</li>
                        </ol>
                        </div>



                        <div class="container-fluid">
		    <div class="card"  style="background-color:transparent">
		        <div class="card-body" >
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>Carousel List</h4>
		                </div>
                    <div class="col-md-6">
		              <a href="{{ route('admin.carousel.create')}}">   <button type="button" class="btn btn-sm btn-primary">Add Carousel</button></a>
		                </div>
		                
		            </div>
		            <div class="row" >
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="" >
                                  <tr>
                                    <th>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </th>  
                                    <th>status</th>
                                    <th>Number-ID</th>
                                    <th>title</th>
                                    <th>Last Updated</th>
                                    <th>Edit</th>
                                  
                                   
                                   
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

    
                                  @foreach($carousels as $carousel)
                                              <tr>
                                                <td></td>
                                              <td>{{$carousel->status }}</td>
                                              <td>{{$carousel->id }}</td>
                                              <td>{{$carousel->title }}</td>
                                              
                                              <td>{{$carousel->updated_at }}</td>


                                              <td><a href="{{ route('admin.carousel.edit',$carousel->id)}}" class="btn btn-light">Edit</a></td> 
                                              
                                              <td><a href="{{ route('admin.carousel.show',$carousel->id)}}" class="btn btn-light">view</a></td> 

                                             <td> <form action="{{ route('admin.carousel.destroy', $carousel->id) }}" method="post">
                                                      @csrf
                                                         @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                  </form> </td>
                                              
                                            
                                     </tr>
                                             @endforeach
                                
                                  </tr>
                                  <tr>
                                    
                            
                                 
                                 
                                </tbody>
                              </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
</div>




<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>

                     <li class="breadcrumb-item"><a href="{{ route('admin.comics.index', ['id' => $comics->id]) }}">{{ __('Comic') }}</a></li>
                     <li class="breadcrumb-item"><a href="{{ route('admin.chapter.index', ['id' => $comics->id]) }}">{{ __('chapters') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('View') }}</li>
              
                     <li class="breadcrumb-item active" aria-current="page">{{  $comics->title}}</li>
                     <li class="breadcrumb-item active" aria-current="page"> {{ __('ID: ') }} {{  $comics->id}}</li>
                        </ol>

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Chapter</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admin.chapter.store', ['id' => $comics->id ])}}"  enctype="multipart/form-data">
          @csrf

          <div class="form-group">    
              <label>Comic_ID: <?php    echo $id ?></label>
            
          </div>
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>


          <div class="form-group">
              <label for="number">Number:</label>
              <input type="text" class="form-control" name="number"/>
          </div>
        
          <div class="form-group">
              <label for="volume">Volume:</label>
              <input type="text" class="form-control" name="volume"/>
          </div>

    <div class="row justify-content-center">
 
        <div class="m-2" method="post" action="/file-upload">
        
          
            <div class="form-group">
                <label for="image">Choose image</label>
                <input id="image" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
</div>
    </div>
    

</form>
  </div>
</div>
</div>
</div>


</div>
 chapter^


 serrises below (series)
<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/comics">{{ __('Comics') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('Create') }}</li>
                        </ol> 
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Comic</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admin.comics.store') }}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>


          <div class="form-group">
              <label for="desc">desc:</label>
              <input type="text" class="form-control" name="desc"/>
          </div>
          <div class="form-group">
              <label for="author">author:</label>
              <input type="text" class="form-control" name="author"/>
          </div>
          <div class="form-group">
              <label for="artist">artist:</label>
              <input type="text" class="form-control" name="artist"/>
          </div>
          <div class="form-group">
              <label for="country">country:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
        
    <div class="row justify-content-center">
 
        <div class="m-2" method="post" action="/file-upload">
        
          
            <div class="form-group">
                <label for="image">Choose image</label>
                <input id="image" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
</div>
    </div>
    

</form>
  </div>
</div>
</div>
</div>


<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/comics">{{ __('Comics') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
                        </ol>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Comic</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('admin.comics.update', $comics->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $comics->title }}" />
            </div>

            <div class="form-group">
                <label for="desc">Desc:</label>
                <input type="text" class="form-control" name="desc" value="{{ $comics->desc }}" />
            </div>

            <div class="form-group">
                <label for="author">author:</label>
                <input type="text" class="form-control" name="author" value="{{ $comics->author }}" />
            </div>
            <div class="form-group">
                <label for="artist">artist:</label>
                <input type="text" class="form-control" name="artist" value="{{ $comics->artist }}" />
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" name="country" value="{{ $comics->country }}" />
            </div>

            <div class="row justify-content-center">
 
 <div class="m-2" method="post" action="/file-upload">
 
   
     <div class="form-group">
         <label for="image">Choose image</label>
         <input id="image" type="file" name="image">
     </div>
    
</div>
</div>
           
<button type="submit" class="btn btn-dark d-block w-75 mx-auto">Update</button>
        </form>
    </div>
</div>



carousel create:

<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/features">{{ __('Features') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('Carousel') }}</li>
                        </ol>
                        </div>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a carousel</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admin.carousel.store') }}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>


          <div class="form-group">
              <label for="position">Position</label>
              <input type="text" class="form-control" name="position"/>
          </div>

          <div class="form-group">
              <label for="classic">Active/Inactive/Null</label>
              <input type="text" class="form-control" name="classic"/>
          </div>
         
          
        
    <div class="row justify-content-center">
 
        <div class="m-2" method="post" action="/file-upload">
        
          
            <div class="form-group">
                <label for="image">Choose image</label>
                <input id="image" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
</div>
    </div>
    

</form>
  </div>
</div>
</div>
</div>


carousel edit option 

<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/features">{{ __('Features') }}</a></li>
                     <li class="breadcrumb-item"><a href="/admin/features/carousel">{{ __('Carousel') }}</a></li>
                     <li class="breadcrumb-item"><a href="{{ route('admin.carousel.show', $carousels->id) }}">{{ __('view') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ $carousels->title }}</li>
                        </ol>
                        </div>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a carousel</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('admin.carousel.update', $carousels->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $carousels->title }}" />
            </div>

            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" class="form-control" name="id" value="{{ $carousels->id }}" />
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" name="position" value="{{ $carousels->position }}" />
            </div>
            <div class="form-group">
                <label for="classic">active/Null(case sensitive):</label>
                <input type="text" class="form-control" name="classic" value="{{ $carousels->classic }}" />
            </div>
                 
               <div class="row justify-content-center">
 
                       <div class="m-2" method="post" action="/file-upload">
 
   
                           <div class="form-group">
                            <label for="image">Choose image</label>
                           <input id="image" type="file" name="image">
                      </div>
                   
                    </div>
                 </div>
         
           
                 <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Update</button>
        </form>
    </div>
</div>


background-color: #4e4c51;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23bdafd2' fill-opacity='0.38' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");