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
                                       @if($comic->chapters->count() == null)

                                       @else 
                                        <div class=" text-gray-300 hover:text-gray-400  opacity-75 cursor-pointer p-2"> <a
                                                href="{{ route('series.chapter.show', ['view' => $comic->id, 'si' => $comic->slug, 'chapter' => $comic->chapter_number($comic)  ]) }}">
                                                <span class="sm:text-sm md:text-xs lg:text-sm mb-2 pt-2">
                                                    {{ 'Chapter' }} {{ $comic->chapter_number($comic) }}</span> </a></div> @endif
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
                                href="{{ route('series.chapter.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug, 'chapter' =>  $chapter->number ]) }}">
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
