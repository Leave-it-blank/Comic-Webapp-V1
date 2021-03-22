@extends('layouts.app')

@section('content')

    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <div>

                <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-yellow-400">
                    Sign Up for an account
                </h2>
                <p class="mt-2 text-center text-sm leading-5 text-gray-600">

                    <a href="#"
                        class="font-medium text-yellow-500 hover:text-yellow-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        and Enjoy your favourite series!
                    </a>
                </p>
            </div>
            <form class="mt-8" action="{{ route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm">
                    <div>
                        <input aria-label="Name" id="name" name="name" type="text" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                            placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="-mt-px">
                        <input aria-label="Username" id="username " name="username" type="text" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                            placeholder="Username address">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="-mt-px">
                        <input aria-label="Email address" id="email" name="email" type="email" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                            placeholder="Email address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="-mt-px">

                        <input aria-label="Password" id="password" name="password" type="password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                            placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="-mt-px">

                        <input id="password-confirm" type="password" name="password_confirmation" required
                            autocomplete="new-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5"
                            placeholder="Confirm Password">

                    </div>
                </div>



                <div class="mt-6">
                    <button type="submit"
                        class="group relative w-full flex justify-center  hover:text-red-500 py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:shadow-outline-yellow 5ctive:bg-yellow-500 transition duration-150 ease-in-out">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-red-500 group-hover:text-yellow-500  hover:text-green-500 transition ease-in-out duration-150"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
