@extends('layouts.app')

@section('content')
<div class="container  md:pl-24 mx-auto md:pr-3 ">
<div class="row sm:px-6 lg:px-8 ">
  <div class="grid grid-cols-1 p-6 mb-2 mt-4 m-0 md:p-4 text-white hover:border-yellow-500 border-b-2 color-base-main">
    {{ 'Comics' }}
</div>

  
    <div class="grid m-2 gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

      @if ($comics->count() == null )

      {{'no results'}}
      @else
     
      @foreach($comics  as  $comic)


      <?php $comic_chapter_number = $comic->chapter_number($comic); ?>
       <div class="flex flex-col rounded shadow overflow-hidden h-80">   
      @if ($comic_chapter_number == null)
      <a href="{{ route('series.si.show', ['view' => $comic->id, 'si' => $comic->slug]) }}" class="flex-shrink-0">
       @else
      <a href="{{ route('project.manga.details', [ 'manga' => $comic->slug, 'id' => $comic->id ]) }}" class="flex-shrink-0">
       @endif
      <img class="w-full  object-cover" src="{{ $comic->cover }}" style="height: 340px" alt="">
      </a>
      <div class="flex-1 bg-black bg-opacity-75 p-4 flex flex-col justify-between">
      <span>
    
      </span>
      <span class="flex-1 mt-2">
      <a href="{{ route('project.manga.chapter', [ 'manga' => $comic->slug, 'id' => $comic->id, 'chapter' => $comic_chapter_number ]) }}" class="block">
      <p class="text-xl font-semibold text-center text-yellow-500">
        {{ $comic->title }}
      </p>
      </a>
      </span>
      <div class="flex space-x-1 mt-2 text-sm text-gray-500">
      <span>
       @if ($comic_chapter_number == null)

       @else

       {{'Chapter'}} {{ $comic_chapter_number }}
      @endif </span>
      </div>
      <div class="flex items-center justify-between flex-wrap sm:flex-nowrap text-sm text-gray-500 mt-4">
      <div class="flex items-center">
      <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      {{ $comic->updated_at->diffForHumans() }} 
      </div>
      <div class="flex-shrink-0">
      <div class="flex items-center">
      <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
      </svg>
     {{$comic->author}}
      </div>
      </div>
      </div>
      </div>
      </div>
      @endforeach
                         @endif
                </div>
                          </div>

                          {{ $comics->render('partials.pagination') }}


                          @endsection
