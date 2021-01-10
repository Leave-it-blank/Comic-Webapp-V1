@extends('layouts.admin')

@section('content')
<div aria-label="breadcrumb" style=" text-align: right;">
                       <ol class="breadcrumb bg-dark " style="max-width: auto;  text-align: right;" >
                     <li class="breadcrumb-item"><a href="/dashboard">{{ __('Dashboard') }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{ __('') }}</li>
                        </ol>
        </div>
<div class="container" >
    <div class="row justify-content-center">
          <!-- bead come don't touch yet -->
        

        <div class="col-md-8">
     
            <div class="card" style="background-color: transparent;">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
