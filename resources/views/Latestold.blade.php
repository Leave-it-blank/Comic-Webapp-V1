@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="font-bold pb-2 mt-12 border-b border-gray-200">
               Latest Chapters

            </div>



            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

                @foreach ($chapters as $chapter)
                    <div class="w-full max-w-sm mx-auto  overflow-hidden">
                        <a
                            href="{{ route('series.chapter.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug, 'chapter' => $chapter->number]) }}">
                            <div class="flex justify-center">

                                <img src="{{ $chapter->comic->cover }}" class=" rounded-sm hidden md:block"
                                    style=" height: 350px;    width: 300px;">
                                <img src="{{ $chapter->comic->cover }}" class="m-2 rounded-sm md:hidden"
                                    style=" height: auto;    width: auto;">

                            </div>
                        </a><span class="bottom-left-card"> Chapter {{ $chapter->number }} </span>

                        <div class="px-2 ">
                            <h3> <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}"
                                    class=" hover:text-yellow-600 uppercase">{{ $chapter->comic->title }} </a> </h3>
                            <span class="text-gray-500 mt-2"> {{ $chapter->updated_at->diffForHumans() }}
                            </span>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection





<a href="https://discord.gg/lynx"> <div class=" discord-button-join hover:text-yellow-500" >{{'JOIN OUR DISCORD'}} </div> </a>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="py-2 flex justify-center">
  </div>
  <h1 class="text-2xl font-semibold text-gray-900">New Releases</h1>
  
  <div class="mt-4 max-w-lg mx-auto grid gap-5 lg:grid-cols-4 lg:max-w-none">
    @foreach ($chapters->take(8)  as $chapter)
  <div class="flex flex-col rounded shadow overflow-hidden">
  <a href="{{ route('series.chapter.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug, 'chapter' => $chapter->number]) }}" class="flex-shrink-0">
  <img class="h-80 w-full object-cover" src="{{ $chapter->comic->cover }}" alt="">
  </a>
  <div class="flex bg-white p-4  flex-col justify-between">
  <span>

  </span>
  <span class="flex mt-2">
  <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}" class="block">
  <p class="text font-semibold text-gray-900">
    {{ $chapter->comic->title }}  <span class=" text-sm text-gray-500">{{'  Chapter '}} {{ $chapter->number }} </span> 
  </p>
  </a>
  </span>
  
  <div class="flex items-center justify-between flex-wrap sm:flex-nowrap text-sm text-gray-500 mt-4">
  <div class="flex items-center">
  <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
  </svg>
  {{ $chapter->updated_at->diffForHumans() }} 
  </div>
  <div class="flex-shrink-0">
  <div class="flex items-center">
  <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
  </svg>
 {{$chapter->comic->author}}
  </div>
  </div>
  </div>
  </div>
  </div>
  @endforeach
  <!-- comment for it -->
  </div>
  </div>
  <a href="https://patreon.com/lynxscans"> <div class=" patreon-button-join hover:text-yellow-500 ">{{'Support US ON PATREON'}} </div> </a>

</div>


@extends('layouts.app')

@section('content')

    <div class=" w-full grid grid-cols-1  place-content-center  md:pl-10">

        <div class="flex justify-center m-2 md:m-5 md:pl-12">
           
            <img class="lib-slides " src="storage/carousel/01.png">
       
        </div>
    </div>


    <div class="md:pl-24 md:pr-3">

        <div class="container-fluid md:m-4 bg-gray-100 active:border-yellow-500">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-1 md:gap-0 p-2">

                <a href="{{ route('reader.comic.mostpopular') }}">

                    <?php $route = \Route::current()->getName(); ?>
                    @if ($route == 'reader.comic.mostpopular')
                        <?php $addclassroute = 'border-yellow-500'; ?>

                    @else
                        <?php $addclassroute = ''; ?>

                    @endif

                    <div
                        class="flex justify-center {{ $addclassroute }} p-1 md:p-4 active:background-white hover:border-yellow-500 border-b-2  ">
                        {{ 'Most Popular' }}</div>
                </a>
                <a href="{{ route('reader.comic.mostviewed') }}">

                    <?php $route = \Route::current()->getName(); ?>
                    @if ($route == 'reader.comic.mostviewed')
                        <?php $addclassroute2 = 'border-yellow-500'; ?>

                    @else
                        <?php $addclassroute2 = ''; ?>

                    @endif
                    <div
                        class="flex justify-center p-1 md:p-4 {{ $addclassroute2 }} hover:border-yellow-500 border-b-2   ">
                        {{ 'Most Viewed' }}</div>
                </a>
                <a href="{{ route('reader.comic.random') }}">

                    <?php $route = \Route::current()->getName(); ?>
                    @if ($route == 'reader.comic.random')
                        <?php $addclassroute3 = 'border-yellow-500'; ?>

                    @else
                        <?php $addclassroute3 = ''; ?>

                    @endif


                    <div
                        class="flex justify-center {{ $addclassroute3 }} p-1 md:p-4 hover:border-yellow-500 border-b-2  ">
                        {{ 'Random' }}</div>
                </a>
            </div>
            <div class="  pr-5 pl-5 pb-2 md:pr-2 md:pl-2 grid grid-cols-1 md:grid-cols-3">

                @if ($comics->count() > 0)
                    @foreach ($comics as $comic)

                        <?php $chapter_comic = App\chapter::where('comic_id', $comic->id)
                        ->orderByRaw("CAST(number as UNSIGNED) DESC")
                        ->orderBy('number', 'desc')
                        ->first()->number; ?>
                        <div class=" w-full p-2  ">
                            <!-- Profile Card -->

                            <div class="rounded-sm shadow-lg bg-gray-600 w-full h-full flex flex-row flex-wrap p-3 antialiased"
                                style="
                              background-image: url('{{ $comic->cover }}');
                              background-repeat: no-repeat;
                              background-size: cover ;
                              background-blend-mode: multiply;
                              
                            ">
                                <div class="w-1/4 grid  ">

                                    <a href="{{ route('series.si.show', ['view' => $comic->id, 'si' => $comic->slug]) }}"
                                        class="flex"> <img class="rounded-sm shadow-lg antialiased "
                                            src="{{ $comic->cover }}"> </a>
                                    <div
                                        class=" opacity-75 sm:inline flex-shrink-1 md:hidden lg:block bg-blue-100 rounded px-3 py-1 text-xs tracking-tight uppercase font-semibold absolute">
                                        <span class="text-blue-600">
                                            Manga
                                        </span>
                                    </div>
                                </div>
                                <div class="w-3/4 px-3 grid grid-row-4 flex-wrap  ">
                                    <div class="w-full text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                                        @if (strlen($comic->title) > 20)

                                            <a href="{{ route('series.si.show', ['view' => $comic->id, 'si' => '1']) }}"
                                                class="block">
                                                <div class=" text-md  md:text-sm lg:text-xl text-white leading-tight">
                                                    {{ \Illuminate\Support\Str::limit($comic->title, 18, $end = '...') }}
                                                </div>
                                            </a>
                                        @else
                                            <a href="{{ route('series.si.show', ['view' => $comic->id, 'si' => '1']) }}"
                                                class="block">
                                                <div class=" text-md md:text-sm lg:text-xl text-white leading-tight">
                                                    {{ $comic->title }}</div>
                                            </a>
                                        @endif
                                        <div class=" text-gray-300 hover:text-gray-400  opacity-75 cursor-pointer p-2"> <a
                                                href="{{ route('series.chapter.show', ['view' => $comic->id, 'si' => $comic->slug, 'chapter' => '1']) }}">
                                                <span class="sm:text-sm md:text-xs lg:text-sm mb-2 pt-2">
                                                    {{ 'Chapter' }} {{ $chapter_comic }}</span> </a></div>
                                        <div
                                            class="sm:text-sm hidden xl:block md:text-xs opacity-50 lg:text-xs text-gray-300 hover:text-gray-400 cursor-pointer  relative pt-3 md:pt-0 bottom-0 right-0">
                                            Author: <b> {{ $comic->author }}</b></div>
                                        <div
                                            class="sm:text-sm md:hidden lg:block opacity-50 md:text-xs lg:text-xs text-gray-300 hover:text-gray-400 cursor-pointer  absolute pt-3 md:pt-0 bottom-0 right-0">
                                            <b> {{ $comic->updated_at->diffForHumans() }}</b></div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Profile Card -->
                        </div>
                    @endforeach
                @endif
            </div>


        </div>



        <!--   okay latest release stuff goes here -->
       
        <div class="grid grid-cols-1 p-6 m-4  md:p-4 text-white hover:border-yellow-500 border-b-2 color-base-main">
            {{ 'Latest Release' }}
        </div>

        @if ($chapters->count() > 0)
        <div class=" pr-5 pl-5 pb-2 md:pr-2 md:pl-2 grid grid-cols-1 md:grid-cols-3 m-2">
         

            

                @foreach ($chapters as $chapter)

                <div class=" w-full p-2  ">
                <div class="rounded-sm shadow-lg bg-gray-600 w-full h-full flex flex-row flex-wrap p-3  antialiased"
                style="
              background-image: url('{{ $chapter->comic->cover }}');
              background-repeat: no-repeat;
              background-size: cover ;
              background-blend-mode: multiply;
              
            ">
                <div class="w-1/4 grid  ">

                    <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}"
                        class="flex"> <img class="rounded-sm shadow-lg antialiased "
                            src="{{ $chapter->comic->cover }}"> </a>
                    <div
                        class=" opacity-75 sm:inline flex-shrink-1 md:hidden lg:block bg-blue-100 rounded px-3 py-1 text-xs tracking-tight uppercase font-semibold absolute">
                        <span class="text-blue-600">
                            Manga
                        </span>
                    </div>
                </div>
                <div class="w-3/4 px-3 grid grid-row-4 flex-wrap  ">
                    <div class="w-full text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                        @if (strlen($chapter->comic->title) > 20)

                            <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => '1']) }}"
                                class="block">
                                <div class=" text-md md:text-sm lg:text-xl text-white leading-tight">
                                    {{ \Illuminate\Support\Str::limit($chapter->comic->title, 18, $end = '...') }}
                                </div>
                            </a>
                        @else
                            <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => '1']) }}"
                                class="block">
                                <div class=" text-md md:text-sm lg:text-xl text-white leading-tight">
                                    {{ $chapter->comic->title }}</div>
                            </a>
                        @endif
                        <div class=" text-gray-300 hover:text-gray-400  opacity-75 cursor-pointer p-2"> <a
                                href="{{ route('series.chapter.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug, 'chapter' => '1']) }}">
                                <span class="sm:text-sm md:text-xs lg:text-sm mb-2 pt-2">
                                    {{ 'Chapter' }} {{ $chapter->number }}</span> </a></div>
                        <div
                            class="sm:text-sm hidden xl:block md:text-xs opacity-50 lg:text-xs text-gray-300 hover:text-gray-400 cursor-pointer  relative pt-3 md:pt-0 bottom-0 right-0">
                            Author: <b> {{ $chapter->comic->author }}</b></div>
                        <div
                            class="sm:text-sm md:hidden lg:block opacity-50 md:text-xs lg:text-xs text-gray-300 hover:text-gray-400 cursor-pointer  absolute pt-3 md:pt-0 bottom-0 right-0">
                             <b> {{ $chapter->comic->updated_at->diffForHumans() }}</b></div>
                    </div>
                </div>
      
            </div>
            <!-- End Profile Card -->
        </div>


                @endforeach
              
            </div>

            @if($chapters->count =! 0)
            {{ $chapters->render('partials.pagination') }}
            @endif
        </div>
@endif

    </div>





@endsection
