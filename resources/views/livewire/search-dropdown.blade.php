{{-- Because she competes with no one, no one can compete with her. --}}
<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-48 sm:w-64 px-4 pl-8 py-1
        focus:outline-none focus:shadow-outline
        " placeholder="Search..">
    <div class="absolute top-0">
        <svg class="w-4 mt-2 ml-2 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path class="heroicon-ui"
                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
    </div>
    @if (strlen($search)>3)
    <div class="absolute text-sm bg-gray-800 rounded w-48 sm:w-64 mt-4">
        @if ($searchResults->count()!=0)
        <ul>
            @foreach ( $searchResults as $result)
            <li class="border-b border-gray-700 ">
                <a class="block hover:bg-gray-700 px-3 py-2 flex items-center"
                    href="{{ route('movies.show',$result['id']) }}">
                    @if ($result['poster_path'])
                    <img class="w-8" src="http://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster">
                    @else
                    <img class="w-8" src="http://via.placeholder.com/50x75" alt="poster">
                    @endif

                    <span class="ml-4">{{ $result['title'] }}</span>
                </a>
            </li>
            @endforeach

        </ul>
        @else
        <div class="px-3 py-2">No result for
            <span class="bg-orange-600 rounded-full py-1 px-3 text-white font-semibold">{{ $search }}</span></div>
        @endif
    </div>
    @endif
</div>
