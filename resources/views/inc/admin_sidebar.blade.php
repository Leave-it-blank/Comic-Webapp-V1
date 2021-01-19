<nav class="text-left">
     
<div class=" px-4 m-2  cursor-pointer flex lg:hidden items-center justify-between">
          
          <h1 class= " ">
            <a href="/" class="tracking-widest  hover:text-yellow-500">CMS</a>
          </h1>
            <a class="btn" id="yellowbanana">
            <svg class="w-6 h-6 flex items-center flex-inline " fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
           
        </a>
</div>


<div id="banana" class="sidenav text-sm  lg:hidden">


<ul class="text-sm mt-6">
      
          <li class="text-gray-700 py-1">
            <a href="/dashboard" class="block px-4 m-2 flex justify-end     hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span>DashBoard</span>
              </a>
          </li>
          <li class="text-gray-700 py-1">
            <a href="/profile" class="block px-4 flex m-2   hover:bg-opacity-50 transition ease-out duration-300 border-transparent justify-end   hover:text-yellow-500">
              <span>Profile</span>
            </a>
          </li>
         
        @can('admin')
          <li class="text-gray-700 py-1">
            <a href="/admin/users" class="block  m-2 px-4 flex    hover:bg-opacity-50 transition ease-out duration-300 border-transparent justify-end   hover:text-yellow-500">
              <span>Users</span>
            
            </a>
          </li> @endcan @can('create series')
    
          <li class="text-gray-700 py-1">
            <a href="/createseries" class="block  m-2 px-4 flex justify-end   hover:bg-opacity-50 transition ease-out duration-300 border-transparent  hover:text-yellow-500">
              <span>Create Comics</span>
             </a>
          </li> @endcan @can('edit series')
          <li class="py-1 text-gray-700 ">
            <a href="/admin/comics" class="block  m-2 px-4    hover:bg-opacity-50 transition ease-out duration-300 border-transparent flex justify-end   hover:text-yellow-500">
              <span>Comics</span>
             </a>
          </li>  @endcan
          @can('admin')
          <li class="py-1 text-gray-700 ">
            <a href="/admin/features" class="block  m-2 px-4 flex justify-end     hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span>Features</span>
             </a>
          </li>
          <li class="text-gray-700 py-1">
            <a href="/settings" class="hidden px-4   m-2 flex justify-end    hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span>Settings</span>
               </a>
          </li> @endcan
        </ul>

</div>











<div class=" cursor-pointer flex  items-center justify-between">
        <ul class="text-lg mt-6  hidden lg:block">
        <li class="text-gray-700  text-2xl py-1">
            <a href="/" class="block px-4 m-4 flex justify-start  tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span>CMS</span>
               </a>
          </li>
          <li class="text-gray-700 py-1">
            <a href="/dashboard" class="block px-4 m-4 flex justify-start   tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span>DashBoard</span>
              <svg class="w-5 ml-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </a>
          </li>
          <li class="text-gray-700 py-1">
            <a href="/profile" class="block px-4 flex m-4  tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent justify-start   hover:text-yellow-500">
              <span>Profile</span>
              <svg  class="w-5 ml-2" sxmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg></a>
          </li>
         @can('admin')
          
          <li class="text-gray-700 py-1">
            <a href="/admin/users" class="block  m-4 px-4 flex justify-start  tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent   hover:text-yellow-500">
              <span>Users</span>
              <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
</svg>
            </a>
          </li> @endcan
          @can('create series')
          <li class="text-gray-700 py-1">
            <a href="/createseries" class="block  m-4 px-4 flex justify-start  tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent  hover:text-yellow-500">
              <span>Create</span>
              <svg class="w-5 ml-2"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg> </a>
          </li> @endcan
          @can('edit series')
          <li class="py-1 text-gray-700 ">
            <a href="/admin/comics" class="block  m-4 px-4   tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent flex justify-start hover:text-yellow-500">
              <span>Comics</span>
              <svg class="w-5 ml-2"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg></a>
          </li> @endcan
          @can('admin')
          <li class="py-1 text-gray-700 ">
            <a href="/admin/features" class="block  m-4 px-4 flex justify-start  tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span>Features</span>
              <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
</svg> </a>
          </li>
          <li class="text-gray-700 py-1">
            <a href="/settings" class="block px-4  m-4 flex justify-start  tracking-widest transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300 border-transparent hover:text-yellow-500">
              <span> Settings</span>
              <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg> </a>
          </li> @endcan
        </ul>
      </nav>