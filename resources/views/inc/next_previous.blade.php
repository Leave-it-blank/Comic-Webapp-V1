<div class="flex justify-between mt-6 mb-2 md:ml-8">
    <div>

        @if ($previous !== null)
            <div
                class="npmbutton hover:bg-gray-50  hover:text-yellow-500  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <a href="{{ URL::to('series/view/' . $id . '/' . $si . '/chapter/' . $previous) }}">Previous</a> </div>
        @endif

    </div>
    <div>
        <a href="{{ route('series.si.show', ['view' => $chapter->comic->id, 'si' => $chapter->comic->slug]) }}"
            class="npmbutton hover:bg-gray-50 hover:text-yellow-500  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Back to Series
        </a>
    </div>
    <div>

        @if ($next !== null)
            <div
                class="npmbutton hover:bg-gray-50 hover:text-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <a href="{{ URL::to('series/view/' . $id . '/' . $si . '/chapter/' . $next) }}">Next</a> </div>
        @endif

    </div>
</div>
