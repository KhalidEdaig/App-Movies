@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h1 class="tracking-wider text-orange-600 text-lg font-semibold">
            Popolar Movies
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-16">
            @foreach ($popularMovies as $pm)
            <x-movie-card :movie="$pm" :genres="$genres" />
            @endforeach
        </div>
        {{ $popularMovies->links() }}
    </div>
</div>
@endsection
