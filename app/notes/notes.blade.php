@foreach ($element['subs']->take(10) as $item)
 ...Code
@endforeach


takes 10 as base prob latest 10

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <header class="mt-4">
         <h3 class="text-2xl font-semibold tracking-wider">DashBoard</h3>
      </header>
36

A cleaner way to do it could be this if it is a collection:

@foreach ($element['subs']->slice(0, 10) as $item)
 ...Code
@endforeach
another way for collections:

@foreach ($element['subs']->take(10) as $item)
 ...Code
@endforeach
or this if it is an array:

@foreach (array_slice($element['subs'], 0, 10) as $item)
 ...Code
@endforeach

all do the same :P

dirty way
<?php $count = 0; ?>
@foreach ($element['subs'] as $item)
   ?php if($count == 10) break; ?>
    // Your code
    <?php $count++; ?>
@endforeach



                             
<div id="file-upload-form" class="uploader" action="{{ route('admin.comics.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      
      <input id="file-upload" type="file" name="cover" accept="image/*" onchange="readURL(this);">
      <label for="file-upload" id="file-drag">
          <img id="file-image" src="#" alt="Preview" class="hidden">
          <div id="start" >
              <i class="fa fa-download" aria-hidden="true"></i>
              <div>Select a file or drag here</div>
              <div id="notimage" class="hidden">Please select an image</div>
              <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
              <br>
              <span class="text-danger">{{ $errors->first('cover') }}</span>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
      </label>




      to store things refer here

      public function store(Request $request, comic $comics)

{
    $request->validate([
        'title'=>'required',
        'country'=>'required',
        
        
    ]);
    $validated = $request->validate([
        'title' => 'string|max:200',
        'image' => 'mimes:jpeg,png|max:1024',
    ]);

    if($request->file('image')->isValid())
 {

    $extension = $request->image->extension();
    $url = Storage::url($validated['title'].".".$extension);
    
   
    $request->image->storeAs('/public/image', $validated['title']. ".".$extension);
   

    $comic = new Comic([
        'title' => $request->get('title'),
        
        'desc' => $request->get('desc'),
        'author' => $request->get('author'),
        'artist' => $request->get('artist'),
        'country' => $request->get('country'),
        'cover' => $url,
        
          
       
    ]);
 


    $comic->save();
    return redirect()->route('admin.comics.index')->with('success', 'manga saved!');

    }

}



named routes   {{ route('series.slug.show', ['view' => $id, 'slug' => $slug]) }}




public function show(comic $comic, $id, $slug)
    {
       
        if( $comics = Comic::find($id))
        {
          
           return View::make('series.comic_info')->with([
    
               'comics' => $comics,
               'id' => $id,
               'slug' => $slug,
           



               <!-- Authentication Links -->
               @guest
                            <li class="text-base font-sm leading-none text-white">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="text-base font-sm leading-none text-white">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="text-base font-sm leading-none text-white dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                               
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color: white"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <p>{{ __('Logout') }}</p>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                                <div class="dropdrown-menu dropdown-menu-right" aria-labelledby='navbardropdown'>
                                                    <a class="dropdown-item " style="color: white" href="/dashboard"><p> {{ __('Dashboard') }}</p></a>
                                                </div>
                              
                            </li>
                        @endguest
                    
















                    login form 

                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







registration <form action="
"></form>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




new form 



<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full">
    <div>
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
        Sign Up for an account
      </h2>
      <p class="mt-2 text-center text-sm leading-5 text-gray-600">
       
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
         and Enjoy your favourite series!
        </a>
      </p>
    </div>
    <form class="mt-8" action="{{ route('register') }}" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm">
        <div>
          <input aria-label="Name" id="name"name="name" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Name">
       
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>
        <div class="-mt-px">
        <input aria-label="Username" id="username " name="username" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Username address">
        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>
        <div class="-mt-px">
        <input aria-label="Email address" id="email"name="email" type="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Email address">
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        </div>
        <div class="-mt-px">
        
          <input aria-label="Password" id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Password">
        
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        
        </div>
        <div class="-mt-px">
        
        <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Confirm Password">
         
        </div>
      </div>

     

      <div class="mt-6">
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign Up
        </button>
      </div>
    </form>
  </div>
</div>




//password reset

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





admin nav 


<nav class="navbar navbar-expand navbar-dark  topbar static-top shadow" id="dashboardmainnav">

    <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
    
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right"  style="background-color: rgb(27, 26, 26)" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  style="color: white" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <p>{{ __('Logout') }}</p>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

                              <div class="dropdrown-menu dropdown-menu-right" aria-labelledby='navbardropdown'>
                                  <a class="dropdown-item"  style="color: white" href="/"><p> {{ __('Home') }}</p></a>
                              </div>
               </div>
          </li>
      @endguest

    </ul>

  </nav>



  carousel

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  @foreach( $carousels as $carousel)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $carousel->id }}" class="{{ $carousel->classic }}"></li>
   
    @endforeach
  </ol>
  <div class="carousel-inner">
   
    @foreach( $carousels as $carousel)
    <div class="carousel-item {{ $carousel->classic }}">
      <img class="d-block w-100" src="{{ $carousel->cover }}"  alt="...">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<script>
    function readURL(input, id) {
    id = id || '#file-image';
    if (input.files &amp;&amp; input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
    $(id).attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
    $('#file-image').removeClass('hidden');
    $('#start').hide();
    }
    }
    </script> 