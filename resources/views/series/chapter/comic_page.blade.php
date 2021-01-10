@extends('layouts.comic_layout')

@section('content')
<div class=" container mx-auto flex flex-wrap  -mb-4 md:mb-0 justify-center  sm:w-full ">
 


@foreach ($chapters as $chapter)
  @foreach (json_decode($chapter->cover) as $page)

       <img src="/{{$chapter->url}}{{($page)}}" class="block ">

 
  @endforeach
@endforeach
</div>





@endsection