@extends('layouts.admin')


@section('content')
    <div class="container shadow-4xl overflow-auto sm:overflow-hidden">
        <h1 class=" font-bold  md:text-xl hover:text-yellow-500 py-4 w-32">Add Chapter</h1>

        @include('partials.alert')

        <div class="w-full  m-4 mb-6 md:mb-0 ">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                Comic_ID: <?php echo $id; ?>
            </label>

        </div>
        <div class="flex container shadow justify-center">
            <form class="w-full max-w-lg m-4" method="post"
                action="{{ route('admin.chapter.store', ['id' => $comics->id]) }}" enctype="multipart/form-data">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-6 ">


                    <div class="w-full md:w-2/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-names">
                            Name:
                        </label>
                        <input
                            class="appearance-none block h-full w-full bg-transparent  border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-transparent "
                            id="grid-name" type="text" name="name" placeholder="chapter 1">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6 pt-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                            Volume:
                        </label>
                        <input
                            class="appearance-none block w-1/2 bg-transparent  rounded py-3 px-4 mb-3 leading-tight focus:outline-none "
                            id="grid-volume" type="text" name="volume" placeholder="1">

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                            Number:
                        </label>
                        <input
                            class="appearance-none block w-1/2 text-xs bg-transparent   rounded py-3 px-4 mb-3 leading-tight focus:outline-none "
                            id="grid-number" type="text" name="number" placeholder="1">

                    </div>
                </div>


                <div class="flex flex-wrap -mx-3 mb-2">



                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                            Upload Pages:
                        </label>
                        <input class="block bg-transparent appearance-none w-full " type="file" class="form-control"
                            name="image[]" placeholder="address" multiple>
                        <div class="m-4 container">
                            <p class="text-gray-500 text-xs italic">Make sure to use 001 002 003 naming</p>
                            <p class="text-gray-500 text-xs italic">Png, jpg, jpeg</p>
                            <p class="text-gray-500 text-xs italic">Pages can be of any width and height</p>
                        </div>
                        @foreach ($errors->all() as $error)
                            <p class="text-red-500 text-xs italic">{{ $error }}</p>
                        @endforeach
                    </div>


                </div>
                <button type="submit"
                    class=" flex profile-btn  w-20 h-8 bg-yellow-500 hover:bg-red-500 mx-auto hover:text-yellow-500 transition ease-out duration-500 justify-center">Upload</button>
            </form>
        </div>

    </div>
    </div>


@endsection
