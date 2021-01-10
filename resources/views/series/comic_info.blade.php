@extends('layouts.comic_layout')

@section('content')



<div class="container   mx-auto sm:px-2 md:px-4">

	<div class="uppercase flex px-8 justify-start text-xl py-4 font-bold hover:text-yellow-500 transition ease-in duration-300">
		{{ $comics->title }}
	</div>


		<div class=" flex justify-items-center justify-center m-4 ">
		<div class=" sm:w-full md:w-2/6">
			<img src="{{ $comics->cover }}" class="m-4 shadow-xl rounded-sm md:hidden" style=" height: auto;    width: auto;">
			<img src="{{ $comics->cover }}" class="m-4 shadow-xl rounded-sm hidden md:block " style=" height: auto;    width: 350px;">

		<div class="container pt-8 shadow-lg hover:border-yellow-500  p-3 transition ease-in duration-300 md:p-4 m-4 py-3"> <div class="m-2"> Author: {{ $comics->author }} </div> <div class="m-2"> Artist: {{ $comics->artist }} </div> <div class="m-2"> Last Updated: {{ $comics->updated_at }} </div> <div class="m-2"> Views: {{ '10000' }} </div> </div>
		</div>

		

		<div class=" hidden  ml-24  md:block text-muted md:w-4/6 ">
			<div class="shadow-xl  p-3">
			<p class="pt-8  font-bold uppercase text-lg">{{ 'Description' }}</p>
		<div class="container "><p class="pt-8 text-sm">{{ $comics->desc }}</p> </div>

			</div>

			<div class="container py-4 px-4 mt-4 shadow-xl">
			<div class="m-2">	{{ 'volume' }} </div>
	
				<div class="max-w-screen-xl mx-auto px-4">
					<!-- Grid wrapper -->
					<div class="-mx-4 flex flex-wrap">
						@foreach( $chapters as $chapter)
					  <!-- Grid column -->
					  <div class=" flex flex-col p-1 justify-items-center sm:w-1/3 lg:w-1/4">
						<a class="flex-1 px-5 py-0 bg-white rounded-lg justify-items-center shadow-lg" href="{{ route('series.chapter.show', ['view' => $comics->id, 'si' => $comics->slug , 'chapter' => $chapter->number]) }}"> Chapter {{ $chapter->number}} 
						  <!-- Card contents -->
						 
						<br>  <span class="mute text-sm text-gray-500">   {{ $chapter->name }} </span> 
						</a>
					  </div>
					  @endforeach	
				
					</div>
				  </div>
				</div>
			</div>
		</div>
		<div class=" md:hidden text-muted md:w-4/6 p-4">
			<div class="shadow-xl  p-3">
			<p class="pt-8 font-bold uppercase text-lg">{{ 'Description' }}</p>
			<p class="pt-8 text-sm">{{ $comics->desc }}</p>

			</div>

			<div class="container py-4 px-4 mt-4 shadow-xl">
				{{ 'volume' }}
	
				<div class="max-w-screen-xl mx-auto px-4">
					<!-- Grid wrapper -->
					<div class="-mx-4 flex flex-wrap">
						@foreach( $chapters as $chapter)
					  <!-- Grid column -->
					  <div class="w-1/2 flex flex-col p-2 sm:w-1/4 lg:w-1/5">
						<div class=" flex-1 px-5 py-2 bg-white rounded-lg shadow-lg">
						  <!-- Card contents -->
						  <a href="{{ route('series.chapter.show', ['view' => $comics->id, 'si' => $comics->slug , 'chapter' => $chapter->number]) }}" class=""> Chapter {{ $chapter->number}}  </a>
						  <br>    <span class="mute text-sm text-gray-500">  {{ $chapter->name }} </span> 
						</div>
					  </div>
					  @endforeach	
				
					</div>
				 
				</div>
		</div>
		</div>

	</div>
























@endsection