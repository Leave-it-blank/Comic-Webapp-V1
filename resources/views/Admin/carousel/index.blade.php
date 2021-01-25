
@extends('layouts.admin')

@section('content')



<div class="flex flex-col">
<a href="{{ route('admin.carousel.create')}}">
<h1 class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Add Carousel</h1> </a>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Carousel-ID:
              </th>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
               Status
              </th>
           
              <th class="px py-3 bg-gray-50"></th>
            </tr>
          </thead>
          <tbody class=" divide-y divide-gray-200">
            <tr>   @foreach($carousels as $carousel)
              <td class="px py-4 whitespace-no-wrap">
                <div class="flex items-center">
                 
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium ">
                    {{$carousel->id}}
                    </div>
                    <div class="text-sm leading-5 text-gray-500">
                 
                    </div>
                  </div>
                </div>
              </td>
              <td class="px py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 ">{{$carousel->title}}</div>
                <div class="text-sm leading-5 text-gray-500"></div>
              </td>
              <td class="px py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{$carousel->status}}
                </span>
              </td>
           
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('admin.carousel.show',$carousel->id)}}"  class="text-gray-500 hover:text-yellow-500">View</a>
              </td>
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                

                <form action="{{ route('admin.carousel.destroy', $carousel->id) }}" method="post">
                                                      @csrf
                                                         @method('DELETE')
                                                    <button class="text-gray-500 hover:text-yellow-500 btn " type="submit">Delete</button>
                                                  </form>
              </td>
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('admin.carousel.edit',$carousel->id)}}" class="text-gray-500 hover:text-yellow-500">Edit</a>
              </td>
            </tr>
            @endforeach
            <!-- More rows... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
