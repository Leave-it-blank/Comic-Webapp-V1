<div class="font-bold pb-2 mt-12 border-b border-gray-200">
New Releases

</div>



<div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

@foreach($chapters  as  $chapter)
                <div class="w-full max-w-sm mx-auto  overflow-hidden">
                  <a  href="{{ route('series.chapter.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug , 'chapter' => $chapter->number]) }}"  >
                    <div class="flex justify-center">
                    
                  <img src="{{ $chapter->comic->cover }}" class="  rounded-sm hidden md:block" style=" height: 300px;    width: 300px;">
                  <img src="{{ $chapter->comic->cover }}" class="m-2 rounded-sm md:hidden" style="  height: auto;    width: auto">
                  
                    </div> </a> <span class="bottom-left-card"> Chapter {{ $chapter ->number }} </span> 
                    
                    <div class="px-2 ">
                     <h3>   <a  href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}" class=" hover:text-yellow-600 uppercase" style="color:{{$settings->site_text_meta }};">{{ $chapter ->comic->title }}  </a> </h3>
                        <span class="text-gray-500 mt-2"> {{ $chapter->updated_at->diffForHumans() }} </span>
                    </div>
                   
                </div>
           @endforeach
                   
             
                    </div>