
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
 
        <div class="m-2" method="post" action="/details">
        
          
            <div class="form-group">
                <label for="images">Choose image</label>
                <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
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
