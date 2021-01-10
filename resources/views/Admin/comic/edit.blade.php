@extends('layouts.admin')


@section('content')

<h1 class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Edit Comic</h1>

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="flex container shadow justify-center">
    <form class="w-full max-w-lg m-4" method="post" action="{{ route('admin.comics.update', $comics->id) }}"  enctype="multipart/form-data">
    @method('PATCH') 
    @csrf
  <div class="flex flex-wrap -mx-3 mb-6">
  
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Title:
      </label>
      <input value="{{ $comics->title }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-title" type="text"  name="title" placeholder="Solo Leveling">
      
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
    </div>
    <div class="w-full md:w-2/3 px-3">
      <label   class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-desc">
        Description:
      </label>
      <input value="{{ $comics->desc }} " class="appearance-none block h-full w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-desc" type="text"  name="desc" placeholder="it sucks">
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6 pt-6">
  <div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Author:
      </label>
      <input value="{{ $comics->author }}" class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-author" type="text"  name="author" placeholder="yeye">
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
            </div>
            <div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Artist:
      </label>
      <input value="{{ $comics->artist }}" class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-artist" type="text"  name="artist" placeholder="turtle">
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
            </div>
  </div>

  
  <div class="flex flex-wrap -mx-3 mb-2">
   
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Country:
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-country" type="text"  name="country">
          <option>Korea</option>
          <option>China</option>
          <option>Japan</option>
          <option>Indo</option>
          <option>French</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
      Choose Thumbnail:
      </label>
      <input class="block appearance-none w-full bg-gray-200 border " id="image" type="file" name="image">
      <p class="text-red-500 text-xs italic">Make sure to use 600x450</p>
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