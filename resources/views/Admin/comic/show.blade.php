@extends('layouts.admin')

@section('content')

    <div class="container    sm:px-2 md:px-4">

        <div class="overflow-x-auto">

            <div
                class="uppercase flex px-8 justify-start text-xl py-4 font-bold hover:text-yellow-500 transition ease-in duration-300">
                {{ $comics->title }}
            </div>


            <div class=" flex justify-items-center justify-center m-4 ">
                <div class=" sm:w-full md:w-2/6">
                    <img src="{{ $comics->cover }}" class="m-4 shadow-xl rounded-sm md:hidden"
                        style=" height: auto;    width: auto;">
                    <img src="{{ $comics->cover }}" class="m-4 shadow-xl rounded-sm hidden md:block "
                        style=" height: auto;    width: 350px;">

                    <div
                        class="container pt-8 shadow-lg hover:border-yellow-500  p-3 transition ease-in duration-300 md:p-4 m-4 py-3">
                        <div class="m-2"> Author: {{ $comics->author }} </div>
                        <div class="m-2"> Artist: {{ $comics->artist }} </div>
                        <div class="m-2"> Last Updated: {{ $comics->updated_at }} </div>
                        <div class="m-2"> Views: {{ '10000' }} </div>
                    </div>
                </div>



                <div class=" hidden  ml-24  md:block text-muted md:w-4/6 ">
                    <div class="shadow-xl  p-3">
                        <p class="pt-8  font-bold uppercase text-lg">{{ 'Description' }}</p>
                        <div class="container ">
                            <p class="pt-8 text-sm">{{ $comics->desc }}</p>
                        </div>

                    </div>

                    <div class="container py-4 px-4 mt-4 shadow-xl">
                        <div class="m-2"> {{ 'volume' }} </div>


                        <div class="flex flex-col">
                            <div class="-my-2  sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        ComicID:
                                                    </th>
                                                    <th
                                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        Title
                                                    </th>
                                                    <th
                                                        class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        Country
                                                    </th>

                                                    <th class="px py-3 bg-gray-50"></th>
                                                </tr>
                                            </thead>
                                            <tbody class=" divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px py-4 whitespace-no-wrap">
                                                        <div class="flex items-center">

                                                            <div class="ml-4">
                                                                <div class="text-sm leading-5 font-medium ">
                                                                    {{ $comics->id }}
                                                                </div>
                                                                <div class="text-sm leading-5 text-gray-500">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px py-4 whitespace-no-wrap">
                                                        <div class="text-sm leading-5 ">{{ $comics->title }}</div>
                                                        <div class="text-sm leading-5 text-gray-500"></div>
                                                    </td>
                                                    <td class="px py-4 whitespace-no-wrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            {{ $comics->country }}
                                                        </span>
                                                    </td>

                                                    <td
                                                        class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                        <a href="{{ route('admin.chapter.index', $comics->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">View Chapter</a>
                                                    </td>
                                                    <td
                                                        class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">





                                                        <!-- More rows... -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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


                <div class="flex flex-col">
                    <div class="-my-2  sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                ComicID:
                                            </th>
                                            <th
                                                class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th
                                                class="px py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Country
                                            </th>

                                            <th class="px py-3 bg-gray-50"></th>
                                        </tr>
                                    </thead>
                                    <tbody class=" divide-y divide-gray-200">
                                        <tr>
                                            <td class="px py-4 whitespace-no-wrap">
                                                <div class="flex items-center">

                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium ">
                                                            {{ $comics->id }}
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px py-4 whitespace-no-wrap">
                                                <div class="text-sm leading-5 ">{{ $comics->title }}</div>
                                                <div class="text-sm leading-5 text-gray-500"></div>
                                            </td>
                                            <td class="px py-4 whitespace-no-wrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    {{ $comics->country }}
                                                </span>
                                            </td>

                                            <td
                                                class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                <a href="{{ route('admin.chapter.index', $comics->id) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">View Chapter</a>
                                            </td>
                                            <td
                                                class="px-2 py-4 m-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">





                                                <!-- More rows... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    </div>



    </div>


















@endsection
