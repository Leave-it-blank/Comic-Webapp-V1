@extends('layouts.admin')


@section('content')
<div class ="container shadow-4xl overflow-auto sm:overflow-hidden">
@include('partials.alert')
<h1 class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Add Comic</h1>

    @if ($errors->any())
     @include('partials.alert')
    @endif
    <div class="flex container shadow justify-center">
    <form class="w-full max-w-lg m-4" method="post" action="{{ route('admin.comics.store') }}"  enctype="multipart/form-data">
    @csrf
  <div class="flex flex-wrap -mx-3 mb-6">
  
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Title:
      </label>
      <input class="appearance-none block w-full bg-transparent border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent" id="grid-title" type="text"  name="title" placeholder="Solo Leveling">
      
      @error('title')
      <p class="text-red-500 text-xs italic">{{$errors}}</p>
      @enderror

    </div>
    <div class="w-full md:w-2/3 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-desc">
        Description:
      </label>
      <textarea input class="appearance-none block h-full w-full bg-transparent  border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-transparent focus:border-gray-500" id="grid-desc" type="text"  name="desc" > Description </textarea>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6 pt-6">
  <div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Author:
      </label>
      <input class="appearance-none block w-1/2 bg-transparent border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent" id="grid-author" type="text"  name="author" placeholder="yeye">
  
            </div>
            <div class="w-full md:w-1/2 px-3">
  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
        Artist:
      </label>
      <input class="appearance-none block w-1/2 bg-transparent  border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent" id="grid-artist" type="text"  name="artist" placeholder="turtle">
  
            </div>
  </div>

  
  <div class="flex flex-wrap -mx-3 mb-2">
   
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Country:
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-transparent border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-transparent focus:border-gray-500" id="grid-country" type="text"  name="country">
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
      <input class="block appearance-none w-full bg-transparent border  " required id="image" type="file" name="image">
      <div class="m-4 container"> <p class="text-gray-500 text-xs italic">{{'Make sure to 450 x 600 (wxh) Cover for best results'}}</p>
        <p class="text-gray-500 text-xs italic">{{'Png, jpg, jpeg'}}</p>
        <p class="text-gray-500 text-xs italic">{{'Title is fixed once url is made  So make sure to name properly.Also 40 characters only :P'}}</p> </div>
      @error('image')
      <p class="text-red-500 text-xs italic">{{$errors}}</p>
      @enderror
    </div>

    
  </div>
  <button type="submit" class=" flex profile-btn mx-auto hover:text-yellow-500 border transition ease-out duration-500 justify-center">Upload</button>
</form>
</div>

</div></div>
@endsection