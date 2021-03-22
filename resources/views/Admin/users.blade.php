@extends('layouts.admin')

@section('content')

<form action="{{ route('admin.user.search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>

@if($users->isnotempty())
    <div class="container mx-auto overflow-x-auto  ">
        <div class="flex flex-col">
            <div class="-my-2  sm:-mx-4 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        UserID
                                    </th>


                                    <th
                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th class="px py-3 bg-gray-50"></th>
                                    <th
                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Country
                                    </th>
                                    <th
                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Joined at
                                    </th>



                                    <th class="px py-3 bg-gray-50"></th>
                                </tr>
                            </thead>


                            <tbody class=" divide-y divide-gray-200">
                                <tr>
                                    @foreach ($users as $user)
                                        <td class="px py-4 whitespace-no-wrap">

                                            <div class="flex items-center">

                                                <div class="text-sm  m-4 leading-5 "> {{ $user->id }}</div>
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="{{ $user->profile_pic }}"
                                                        alt="">
                                                </div>

                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium ">
                                                        {{ $user->name }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-sm pl-10 leading-5 text-gray-500"> {{ $user->email }}</div>
                    </div>



                    </td>
                    <td class="px py-4 whitespace-no-wrap">
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ implode(
    ',',
    $user->roles()->get()->pluck('name')->toArray(),
) }}
                        </span>
                    </td>

                    <td> </td>
                    <td class="px py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        {{ $user->country }}
                    </td>


                    <td class="px py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                        {{ $user->created_at }}
                    </td>
                    <td class="px py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <td> <a class="text-gray-500 hover:text-yellow-500" onclick="return confirm('Are you sure?')"
                            href="{{ route('admin.users.edit', $user->id) }}"><svg class="w-6 h-6"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg></a>
                    </td>
                    <td>
                        <button class="text-gray-500 hover:text-yellow-500"
                            onclick="return confirm('you dont have access to view this!')" href="#"><svg class="w-5 h-5"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                            </svg></button>
                    </td>
                    <td>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                            @csrf
                            {{ method_field('Delete') }}
                            <button type="submit" class="text-gray-500 hover:text-yellow-500"
                                onclick="return confirm('Are you sure? you may loose access to panel.')"> <svg
                                    class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg></button>
                        </form>




                    </td>
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
    </div>

    @else 

    {{'No user found!'}}
    @endif


@endsection
