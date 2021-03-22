<div class="flex  justify-end">

    @guest
        @if (Route::has('register'))

        @endif

    @else

        <a onmouseover="mOver(this)" onmouseout="mOut(this)" href="{{ route('logout') }}"
            class="profile-btn text-primary  w-20 h-8 hover:bg-primary hover:text-yellow-500 transition ease-out duration-500"
            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
            {{ Auth::user()->name }} </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>




    @endguest
</div>
