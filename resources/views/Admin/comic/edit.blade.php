@extends('layouts.admin')


@section('content')

    <h1 class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Edit Comic</h1>

    @if ($errors->any())
        <div class="flex bg-red-300 max-w-sm mb-4">
            <div class="w-16 bg-red-600">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M437.019 74.981C388.667 26.629 324.38 0 256 0S123.333 26.63 74.981 74.981 0 187.62 0 256s26.629 132.667 74.981 181.019C123.332 485.371 187.62 512 256 512s132.667-26.629 181.019-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.668-74.981-181.019zM256 470.636C137.65 470.636 41.364 374.35 41.364 256S137.65 41.364 256 41.364 470.636 137.65 470.636 256 374.35 470.636 256 470.636z"
                            fill="#FFF" />
                        <path
                            d="M341.22 170.781c-8.077-8.077-21.172-8.077-29.249 0L170.78 311.971c-8.077 8.077-8.077 21.172 0 29.249 4.038 4.039 9.332 6.058 14.625 6.058s10.587-2.019 14.625-6.058l141.19-141.191c8.076-8.076 8.076-21.171 0-29.248z"
                            fill="#FFF" />
                        <path
                            d="M341.22 311.971l-141.191-141.19c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.076-8.077 21.171 0 29.248l141.19 141.191a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058c8.075-8.077 8.075-21.172-.001-29.249z"
                            fill="#FFF" />
                    </svg>
                </div>
            </div>
            <div class="w-auto text-grey-darker items-center p-4">
                <span class="text-lg font-bold pb-4">
                    {{ session('errors') }}
                </span>

            </div>
        </div>
    @endif
    <div class="flex container shadow justify-center">
        <form class="w-full max-w-lg m-4" method="post" action="{{ route('admin.comics.update', $comics->id) }}"
            enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                        Title:
                    </label>
                    <input value="{{ $comics->title }}"
                        class="appearance-none block w-full bg-transparent  border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent"
                        id="grid-title" type="text" name="title" placeholder="Solo Leveling">

                    @foreach ($errors->all() as $error)
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    @endforeach
                </div>
                <div class="w-full md:w-2/3 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-desc">
                        Description:
                    </label>
                    <textarea input value="{{ $comics->desc }} "
                        class="textarea bg-transparent  border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-transparent focus:border-gray-500"
                        id="grid-desc" type="text" name="desc" placeholder="it sucks">{{ $comics->desc }} </textarea>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6 pt-6">
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                        Author:
                    </label>
                    <input value="{{ $comics->author }}"
                        class="appearance-none block w-1/2 bg-transparent border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent"
                        id="grid-author" type="text" name="author" placeholder="yeye">
                    @foreach ($errors->all() as $error)
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    @endforeach
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                        Artist:
                    </label>
                    <input value="{{ $comics->artist }}"
                        class="appearance-none block w-1/2 bg-transparent  border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent"
                        id="grid-artist" type="text" name="artist" placeholder="turtle">
                    @foreach ($errors->all() as $error)
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    @endforeach
                </div>
            </div>


            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Country:
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-transparent border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-transparent focus:border-gray-500"
                            id="grid-country" type="text" name="country">
                            <option>Korea</option>
                            <option>China</option>
                            <option>Japan</option>
                            <option>Indo</option>
                            <option>French</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                        Choose Thumbnail:
                    </label>
                    <input class="block appearance-none w-full bg-transparent border " id="image" type="file" name="image">
                    <div class="m-4 container">
                        <p class="text-gray-500 text-xs italic">Make sure to 450 x 600 (wxh) Cover for best results</p>
                        <p class="text-gray-500 text-xs italic">Png, jpg, jpeg</p>
                        <p class="text-gray-500 text-xs italic">Title is fixed once url is made. So make sure to name
                            properly.</p>
                    </div>
                    @foreach ($errors->all() as $error)
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    @endforeach
                </div>


            </div>
            <button type="submit"
                class=" flex profile-btn mx-auto hover:text-yellow-500 border transition ease-out duration-500 justify-center">Upload</button>
        </form>
    </div>

    </div>

@endsection
