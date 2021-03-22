@extends('layouts.page')

@section('content')




<div class=" container mx-auto flex flex-wrap  -mb-4 md:mb-0 justify-center  sm:w-full ">

  

@foreach ($chapters as $chapter)
  @foreach (json_decode($chapter->cover) as $page)

    <div class="flex  justify-center" id="page_comics_chapter" >   <img src="/{{$chapter->url}}{{($page)}}" class="block "> </div>

 
  @endforeach
@endforeach
</div>





@endsection