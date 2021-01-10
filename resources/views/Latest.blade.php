@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
<div class="font-bold pb-2 mt-12 border-b border-gray-200">
  New Releases
  
  </div>
  
  
  
  <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
  
  @foreach($chapters  as  $chapter)
                  <div class="w-full max-w-sm mx-auto  overflow-hidden">
                    <a  href="{{ route('series.chapter.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug , 'chapter' => $chapter->number]) }}"  >
                      <div class="overlay"> Chapter {{ $chapter ->number }} </div>  <div class="flex justify-center">
                      
                    <img src="{{ $chapter->comic->cover }}" class="m-4  rounded-sm hidden md:block" style=" height: 400px;    width: 370px;">
                    <img src="{{ $chapter->comic->cover }}" class="m-4 rounded-sm md:hidden" style=" height: auto;    width: 400px;">
                    
                      </div> </a>
                      
                      <div class="px-2 ">
                       <h3>   <a  href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}" class="text-gray-700 hover:text-yellow-600 uppercase">{{ $chapter ->comic->title }}  </a> </h3>
                          <span class="text-gray-500 mt-2"> {{ $chapter->updated_at }} </span>
                      </div>
                     
                  </div>
             @endforeach
                     
               
                      </div>
                    </div>
                  </div>
                 @endsection