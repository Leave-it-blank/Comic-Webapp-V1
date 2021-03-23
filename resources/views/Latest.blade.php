@extends('layouts.app')

@section('content')

<div class="container md:pl-24 mx-auto md:pr-3">
  <div class="grid grid-cols-1 p-6 m-4  md:p-4 text-white hover:border-yellow-500 border-b-2 color-base-main">
    {{ 'Latest Release' }}
</div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="py-2 flex justify-center">
    </div>
   
    
    <div class="mt-4 p-5 md:p-0 max-w-lg mx-auto grid gap-5  lg:grid-cols-4 lg:max-w-none ">
      @foreach ($chapters as $chapter)
    <div class="flex flex-col rounded shadow overflow-hidden "  style="
    background-image: url('{{ $chapter->comic->cover }}');
    background-repeat: no-repeat;
    background-size: cover ;
    background-blend-mode: multiply ;
    height: 350px;
    background-opacity: 20%;

    
  ">
  
    <div class="flex-1 p-4 grid grid-row-3  mx-auto ">
    <span>
    <div class="hidden sm:inline  bg-blue-100 rounded px-3 py-1 text-xs tracking-wide uppercase font-semibold">
    <span class="text-blue-600">
    Novel
    </span>
    </div>
    </span>
    <div> <div> 
      </div></div>
   
    <div> 
    <div class="mt-20 p-3  bg-white bg-opacity-75 mx-auto">   <span >
      <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}" class="block">
      <p class="text-md text-center font-semibold shadow-xs  rounded  text-gray-900" >
        {{ $chapter->comic->title }}
      </p>
      </a>
      </span>
    
   

    <div class="  text-sm text-gray-500">
   
    <span>
      {{'Volume'}} {{ $chapter->Volume }} {{'Chapter'}} {{ $chapter->number }}
    </span>
    </div>
    <div class=" flex-wrap sm:flex-nowrap text-sm text-gray-500 mt-4">
    <div class="">
    <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    {{ $chapter->updated_at->diffForHumans() }} 
    </div>
    <div class="flex-shrink-0">
    <div class=""">
    <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
    </svg>
   {{$chapter->comic->author}}
    </div>
    </div>
    </div>
    </div>
    </div>
  </div>
  </div>
    @endforeach

  
    <!-- comment for it -->
    </div>
    {{ $chapters->render('partials.pagination') }}
</div>
</div>
    @endsection
