@extends('layouts.admin')

@section('content')

<div class="flex flex-col">
  @include('partials.alert')
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

  
    <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-8">
    <a href="{{ route('admin.chapter.create', ['id' => $comics->id ])}}">   <button type="button" class="m-2 hover:text-yellow-500 transition ease-out duration-500 profile-btn border-2">Add Chapter</button></a>
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px m-2 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                ID:
              </th>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Number
              </th>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
           
              <th class="px py-3 bg-gray-50"></th>
            </tr>
          </thead>
          <tbody class=" divide-y divide-gray-200">
            <tr>   @foreach($chapters ->sortBy('number') as $chapter)
              <td class="px py-4 whitespace-no-wrap">
                <div class="flex items-center">
                 
                  <div class="ml-4">
                    <div class="text-sm m-2 leading-5 font-medium ">
                    {{$chapter->id}}
                    </div>
                    <div class="text-sm leading-5 text-gray-500">
                 
                    </div>
                  </div>
                </div>
              </td>
              <td class="px py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 m-2 ">{{$chapter->number}}</div>
                <div class="text-sm leading-5 text-gray-500"></div>
              </td>
              <td class="px py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{$chapter->name}}
                </span>
              </td>
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('admin.chapter.edit', ['id' => $comics->id, 'chapter' => $chapter->number])}}" class="text-gray-500 hover:text-yellow-500">Edit</a>
              </td>
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('series.chapter.show', ['view' => $comics->id, 'si' => $comics->slug , 'chapter' => $chapter->number]) }}" class="text-gray-500 hover:text-yellow-500">View</a>
              </td>
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
              <form action="{{ route('admin.chapter.destroy', [$chapter->id ,$comics])}}" method="post">
                                                      @csrf
                                                         @method('DELETE')
                                                         <button  onclick="return confirm('Are you sure?')" class="text-red-600 hover:text-indigo-900 btn " type="submit">Delete</button>  </form>
                                                 
                                               
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