@extends('layouts.admin')


@section('content')

<h1 class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Add Chapter</h1>

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <div class="w-full  m-4 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
      Comic_ID: <?php    echo $id ?>
      </label>
     
    </div>
    <div class="flex container shadow justify-center">
    <form class="w-full max-w-lg m-4" method="post" action="{{ route('admin.chapter.store', ['id' => $comics->id ])}}" enctype="multipart/form-data">
    @csrf
  
  <div class="flex flex-wrap -mx-3 mb-6">
  
   
    <div class="w-full md:w-2/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-names">
        Name:
      </label>
      <input class="appearance-none block h-full w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" type="text"  name="name" placeholder="chapter 1">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6 pt-6">
  <div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
      Volume:
      </label>
      <input class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-volume" type="text"  name="volume" placeholder="1">
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
            </div>
            <div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
  Number:
      </label>
      <input class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-number" type="text"  name="number" placeholder="1">
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
            </div>
  </div>

  
  <div class="flex flex-wrap -mx-3 mb-2">
   
  
    
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
      Choose Thumbnail:
      </label>
      <input class="block appearance-none w-full bg-gray-200 border "  required type="file" class="form-control" name="image[]" placeholder="address" multiple>
      <p class="text-gray-500 text-xs italic">Make sure to use 001 002 003 naming</p>
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
    </div>

    
  </div>
  <button type="submit" class=" flex profile-btn mx-auto hover:text-yellow-500 border transition ease-out duration-500 justify-center">Upload</button>
</form>
</div>

</div>



@endsection