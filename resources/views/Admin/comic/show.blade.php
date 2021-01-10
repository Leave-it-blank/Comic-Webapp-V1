@extends('layouts.admin')

@section('content')
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                ComicID:
              </th>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Country
              </th>
           
              <th class="px py-3 bg-gray-50"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr> 
              <td class="px py-4 whitespace-no-wrap">
                <div class="flex items-center">
                 
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                    {{$comics->id}}
                    </div>
                    <div class="text-sm leading-5 text-gray-500">
                 
                    </div>
                  </div>
                </div>
              </td>
              <td class="px py-4 whitespace-no-wrap">
                <div class="text-sm leading-5 text-gray-900">{{$comics->title}}</div>
                <div class="text-sm leading-5 text-gray-500"></div>
              </td>
              <td class="px py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{$comics->country}}
                </span>
              </td>
           
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                <a href="{{ route('admin.chapter.index', $comics->id)}}"  class="text-indigo-600 hover:text-indigo-900">View Chapter</a>
              </td>
              <td class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                

  
          
          
            <!-- More rows... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




@endsection

