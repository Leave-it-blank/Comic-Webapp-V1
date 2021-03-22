<div id="mySidebar" class="sidebar " style="hover: width 250px;" >

    <a class="transform transition ease-out duration-300 text-xl"><span>  </span>  <span id="main_sidebar_block_1" class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp; </span></a><br>
     <a href="/" class="transform hover:scale-110 hover:bg-orange-500 transition ease-out duration-300 text-xl"><span>  </span>  <span id="main_sidebar_block_2" class="icon-text">&nbsp;&nbsp;&nbsp;&nbsp; {{ $settings->site_name }}</span></a><br>
<br>

    <a href="/" class="transform hover:scale-110 hover:bg-yellow-500 transition ease-out duration-300 text-sm" ><span><i class="material-icons">house</i><span class="icon-text pl-3">&nbsp;&nbsp;&nbsp;&nbsp; Home</span></a><br>
    <a href="/latest" class="transform hover:scale-110 hover:bg-yellow-500 transition ease-out duration-300 text-sm" ><i class="material-icons">house_siding </i><span class="icon-text pl-3"></span>&nbsp;&nbsp;&nbsp;&nbsp; New Release</a></span>
    </a><br>
    <a href="/comics" class="transform hover:scale-110 hover:bg-yellow-500 transition ease-out duration-300 text-sm"><i class="material-icons">bento</i><span class="icon-text pl-3"></span>&nbsp;&nbsp;&nbsp;&nbsp; Comics</span></a><br>
    <a href="Https://lynxscans.com" class="transform hover:scale-110 hover:bg-yellow-500 transition ease-out duration-300 text-sm"><i class="material-icons">launch</i><span class="icon-text pl-3"></span>&nbsp;&nbsp;&nbsp;&nbsp; View More</span></a><br>
    @guest

        @if (Route::has('register'))


        @endif

    @else
     <a href="/dashboard" class="transform hover:scale-110 hover:bg-yellow-500 transition ease-out duration-300 text-sm"><i class="material-icons">dashboard</i><span class="icon-text pl-3"></span>&nbsp;&nbsp;&nbsp;&nbsp;DashBoard<span></a>
        
        <br>
        
        @endguest <a href="/search" class="transform hover:scale-110 hover:bg-yellow-500 transition ease-out duration-300 text-sm"> <i class="material-icons">search</i><span class="icon-text pl-3"></span>&nbsp;&nbsp;&nbsp;&nbsp;Search<span></a>
  

    </div>