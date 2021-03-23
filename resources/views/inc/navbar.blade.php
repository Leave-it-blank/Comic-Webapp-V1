<nav id="nav_main_page_bar"class="text-right  bg-white-200">
    <div class="flex justify-between items-center">
        <ul class=" inline-flex ">
            <h1 class="font-bold uppercase p-4 border-b hover:border-yellow-500  border-gray-100">
                <a href="/" style="color: {{ $settings->site_text_meta }} ;"
                    class="text-xl m-2 pl-2 hover:text-yellow-600 tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300">{{ $settings->site_name }}</a>
            </h1>
            <div
                class=" grid grid-cols-3 divide-x divide-gray-400 flex justify-start items-center  p-4 border-b  border-gray-100 hidden md:block">
             <!--   <a href="/" class=" p-2 text-xs hover:text-yellow-500 tracking-widest">Home</a>
                <a href="/latest" class="p-2 text-xs hover:text-yellow-500 tracking-widest">Latest</a>
                <a href="https://lynxscans.com/comics" class=" p-2  text-xs hover:text-yellow-500 tracking-widest">View More Comics</a> -->
             
            </div>

        </ul>

        <div class="cursor-pointer hidden md:block">

            <span class="rounded-xl shadow-sm">
                <ul class=" m-4 inline-flex ">
                    <!--Support us! -->
           <!--         <a class="m-3 hover:text-red-700 hover:shadow-lg transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-500"
                        href="{{ $settings->patreon_tag }}">
                        <i class="fab fa-patreon "></i>
                    </a>
                    <a class="m-3 hover:text-blue-700 hover:shadow-lg transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-500 "
                        href="{{ $settings->discord_tag }}">
                        <i class="fab fa-discord"></i>
                    </a> -->
                    <form action="{{ route('reader.comic.search') }}" method="GET">
                        <input id="search_bar_lib " class="rounded-xl text-right w-40  " type="text" name="search" placeholder=" Search   " required/>
                        
                        <button class="material-icons" type="submit">search</button>
                    </form>

                    <div class=" ml-8 inline-flex " id="dropnav" type="button" aria-haspopup="true" aria-expanded="true">
                     
                        @guest

                            <a class="pr-4 transform hover:scale-125 hover:text-yellow-500 hover:bg-opacity-50 transition ease-in duration-800"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))

                                <a class="pr-2 transform hover:scale-125 hover:text-yellow-500 hover:bg-opacity-50 transition ease-in duration-800"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>

                            @endif

                        @else
                            <div
                                class="pr-2 transform hover:scale-105 hover:text-yellow-500 hover:bg-opacity-50 transition ease-in duration-800">
                                </div> <svg
                                class="w-6 h-6  hover:text-yellow-500 transform hover:scale-150 hover:bg-opacity-50 transition ease-out duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <!-- Heroicon name: chevron-down -->
                        @endguest
                    </div>


                </ul>
            </span>
        </div>
        <div class="px-4  cursor-pointer md:hidden transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-500"
            id="burger">
            <svg class="w-6 h-6 hover:text-yellow-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>
    </div>

    <ul class="text-sm mt-6 hidden md:hidden hover:bg-opacity-50" id="menu">
        <li class=" py-1">
            <a href="/"
                class="block px-4 flex hover:text-yellow-500 justify-end border-r-4 border-white   hover:bg-opacity-50 hover:border-yellow-500">
                <span>Home</span>
                <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
            </a>
        </li>
        <li class="py-1">
            <a href="/latest"
                class="block hover:bg-opacity-50 px-4 hover:text-yellow-500 flex justify-end border-r-4 hover:border-yellow-500 border-white">
                <span>Latest</span>
                <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                    </path>
                </svg>
            </a>
        </li>
        <li class="py-1">
            <a href="/comics"
                class=" px-4 flex hover:bg-opacity-50 hover:text-yellow-500 justify-end border-r-4 border-white hover:border-yellow-500">
                <span>Comics</span>
                <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </a>
        </li>
        <li class="py-1">
            <a href="https://lynxscans.com/comics"
                class=" px-4 flex hover:bg-opacity-50 hover:text-yellow-500 justify-end border-r-4 border-white hover:border-yellow-500">
                <span>View More Comics</span>
                <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </a>
        </li>
        <li class="py-1">
            <div href="/comics"
                class=" px-4 flex hover:bg-opacity-50 hover:text-yellow-500 justify-end border-r-4 border-white hover:border-yellow-500">

                <a class="m-3 hover:text-red-700 hover:shadow-lg transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-500"
                    href="{{ $settings->patreon_tag }}">
                    <i class="fab fa-patreon "></i>
                </a>
                <a class="m-3 hover:text-blue-700 hover:shadow-lg transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-500 "
                    href="{{ $settings->discord_tag }}">
                    <i class="fab fa-discord"></i>
                </a>
            </div>

        </li>
        @guest

            <li class="py-1">
                <a href="{{ route('login') }}"
                    class="block px-4 flex hover:bg-opacity-50 hover:text-yellow-500 justify-end border-r-4 border-white hover:border-yellow-500">
                    <span>{{ __('Login') }}</span>
                    <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>
                </a>
            </li>

            @if (Route::has('register'))

                <li class="py-1">
                    <a href="{{ route('register') }}"
                        class="block px-4 flex hover:bg-opacity-50 hover:text-yellow-500 justify-end border-r-4 border-white hover:border-yellow-500">
                        <span>{{ __('Register') }}</span>
                        <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>

                    </a>
                </li>
            @endif

        @else

            </li>
            </a>

            <li class="py-1">
                @can('edit series')
                <a class="block px-4 flex hover:bg-opacity-50 hover:text-red-500 justify-end border-r-4 hover:border-yellow-500 border-white"
                    href="{{route('admin.dashboard')}}">
                    Dashboard
                    <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    @endcan 
                </a>
            </li>
            <li class="py-1">
                <a class="block px-4 flex hover:bg-opacity-50 hover:text-red-500 justify-end border-r-4 hover:border-yellow-500 border-white"
                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    Logout
                    <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                    </svg>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
        </li>


    </ul>


    </div>

    @guest

        @if (Route::has('register'))


        @endif

    @else


        <div id="menudrop" class="origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg hidden">
            <div class="rounded-md bg-gray-100 shadow-xs bg-opacity-50">

                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">

                    @can('edit series')
                    <a href="{{route('admin.dashboard')}}"
                        class="block px-4 py-2 text-sm leading-5 text-gray-900  hover:bg-gray-100 hover:text-yellow-500 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">Dashboard</a>

                   @endcan 

                    <a href="#"
                        class="block px-4 py-2 text-sm leading-5 text-gray-900  hover:bg-gray-100 hover:text-yellow-500focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">Support</a>
                    <a href="#"
                        class="block px-4 py-2 text-sm leading-5 text-gray-900  hover:bg-gray-100 hover:text-yellow-500 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem">random</a>



                    <a class="block w-full text-right px-4 py-2 text-sm leading-5 text-gray-900  hover:bg-gray-100 hover:text-red-500 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                        role="menuitem" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
    </div>
</nav>
