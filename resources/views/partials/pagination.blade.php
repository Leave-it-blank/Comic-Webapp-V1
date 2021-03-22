

@if ($paginator->hasPages())
<div class=" shadow-xs px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
    <div class="flex-1 flex justify-between sm:hidden">

        @if ($paginator->onFirstPage())
      <a href="#" class=" disabled relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
      {{  'Previous'}}
      </a>
      @else 
      <a href="{{ $paginator->previousPageUrl() }}" class=" disabled relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
        {{  'Previous'}}

        @endif
     

        @if ($paginator->hasMorePages())
      <a  href="{{ $paginator->nextPageUrl() }}" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
       {{ 'Next'}}
      </a>

      @else 
      <a  href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
        {{ 'Next'}}
       </a>
       @endif
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          {{'Showing Page no.'}}
        
          <span class="font-medium">{{$paginator->CurrentPage()  }}</span>
         {{ 'out of'}}
          <span class="font-medium">{{$paginator->lastPage()}}</span>
        {{'pages'}}
        </p>
      </div>
      <div>
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">


            @if ($paginator->onFirstPage())
          <a href="#" class=" disabled relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Previous</span>

            @else <a href="{{ $paginator->previousPageUrl() }}" class=" disabled relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
         @endif


            <!-- Heroicon name: solid/chevron-left -->
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
       
          @foreach ($elements as $element)
           
          @if (is_string($element))
              <li class="disabled"><span>{{ $element }}</span></li>
          @endif


         
          @if (is_array($element))
              @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                      <a class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"><span>{{ $page }}</span></a>
                  @else
                     <a  class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50" href="{{ $url }}">{{ $page }}</a>
                  @endif
              @endforeach
          @endif
      @endforeach

      @if ($paginator->hasMorePages())
          <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
            <span class="sr-only">Next</span>

      @else 
      <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
        <span class="sr-only">Next</span>
      @endif
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
        </nav>
      </div>
    </div>
  </div>
  @endif 