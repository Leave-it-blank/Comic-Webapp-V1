@extends('layouts.admin')


@section('content')
<div class="">
<a class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Carousel Update</a> </div>

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
    <form class="w-full max-w-lg m-4" method="post" action="{{ route('admin.carousel.update', $carousels->id) }}"  enctype="multipart/form-data">
    @method('PATCH') 
    @csrf
  <div class="flex flex-wrap -mx-3 mb-6">
  
    <div class="w-full md: px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Title:
      </label>
      <input  value="{{ $carousels->title }} " class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-title" type="text"  name="title" placeholder="Solo Leveling">
      
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
    </div>
    <div class="w-full md: px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Id:
      </label>
      <input  value="{{ $carousels->id }} " class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-id" type="text"  name="id " value="{{ $carousels->id }}">
      
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
    </div>
  </div>


  
  <div class="flex flex-wrap -mx-3 mb-2">
  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Url:
      </label>
      <div class="relative">
        <input class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-classic" type="text"  name="classic">
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
   
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
       Position:
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-position" type="text" placeholder="{{ $carousels->position }}"  name="position">
          <option>First-slide</option>
          <option>Second-slide</option>
          <option>Third-slide</option>
          <option>Fourth-slide</option>
          <option>Fifth-slide</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    
    <div class="w-full md:w-1/2 m-4 px-3 mb-6 md:mb-0" >
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
      Choose Thumbnail:
      </label>
      <input method="post" action="/file-upload" class="block appearance-none w-full bg-gray-200 border " id="image" type="file" name="image">
      <p class="text-red-500 text-xs italic">Make sure to use 600x450</p>
      @foreach ($errors->all() as $error)
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            @endforeach
    </div>

    
  </div>
  <button type="submit" class=" flex profile-btn mx-auto hover:text-yellow-500 border transition ease-out duration-500 justify-center">Update</button>
</form>
</div>

</div>
@endsection