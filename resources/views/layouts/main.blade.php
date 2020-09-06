<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    {{--  Tailwond  --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/style.css">
    {{-- @livewireStyles --}}
    <livewire:styles>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800 shadow-md">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <svg width="136" height="40" xmlns="http://www.w3.org/2000/svg">

                            <g>
                                <title>background</title>
                                <rect fill="none" id="canvas_background" height="44" width="138" y="-1" x="-1" />
                            </g>
                            <g>
                                <title>Layer 1</title>
                                <line stroke="#7383BF" id="svg_1" fill="none" stroke-width="2" stroke-linecap="round"
                                    stroke-miterlimit="10" y2="47.5" x2="15.711" y1="31.5" x1="23.132" />
                                <line id="svg_2" fill="none" stroke="#7383BF" stroke-width="2" stroke-linecap="round"
                                    stroke-miterlimit="10" y2="47.5" x2="30.553" y1="31.5" x1="23.132" />
                                <path id="svg_3" fill="#e86317"
                                    d="m53.02,29.428l-12.509,-11.954c-0.696,-0.703 -0.679,-1.847 0.038,-2.528l12.509,-11.546c1.114,-1.058 2.942,-0.261 2.942,1.283l0,11.507l0,11.993c0,1.569 -1.88,2.354 -2.98,1.245z" />
                                <path id="svg_4" fill="#000000"
                                    d="m37.827,31.5l-31.036,0c-2.094,0 -3.791,-1.697 -3.791,-3.791l0,-23.265c0,-2.169 1.775,-3.944 3.944,-3.944l31.112,0c2.178,0 3.944,1.766 3.944,3.944l0,22.883c0,2.295 -1.878,4.173 -4.173,4.173z" />
                                <circle id="svg_5" fill="#ff7f00" r="5.5" cy="12" cx="14.5" />
                                <line id="svg_6" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                                    stroke-miterlimit="10" y2="17.5" x2="21" y1="12.5" x1="16" />
                                <g id="svg_7" />
                                <g id="svg_8" />
                                <g id="svg_9" />
                                <g id="svg_10" />
                                <g id="svg_11" />
                                <g id="svg_12" />
                                <g id="svg_13" />
                                <g id="svg_14" />
                                <g id="svg_15" />
                                <g id="svg_16" />
                                <g id="svg_17" />
                                <g id="svg_18" />
                                <g id="svg_19" />
                                <g id="svg_20" />
                                <g id="svg_21" />
                                <text opacity="0.99" font-weight="bold" stroke="#7383BF" xml:space="preserve"
                                    text-anchor="start" font-family="'Times New Roman', Times, serif" font-size="24"
                                    id="svg_22" y="26" x="58" stroke-opacity="null" stroke-width="0"
                                    fill="#ffffff">Movies</text>
                            </g>
                        </svg>
                    </a>
                </li>

                <li class="dropdown md:ml-16 mt-4 md:mt-0">
                    <div class="dropdown inline-block relative">
                        <span class="">
                            <a class="hover:text-gray-300" href="{{ route('movies.index') }}" class="">Movies
                            </a>
                        </span>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 ">
                            <li class="">
                                <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap"
                                    href="{{ route('movies.index') }}">Popular
                                </a>
                            </li>
                            <li class="">
                                <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap"
                                    href="{{ route('movies.movies-now-playing') }}">Now Playing
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TVS Shows </a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                    <div class="mt-3 md:mt-0 md:ml-4">
                        <a href="#">
                            <img src="/images/edaig.jpg" alt="logo" class="rounded-full h-8 w-8">
                        </a>
                    </div>
            </div>
        </div>
    </nav>
    @yield('content')
    {{-- @livewireScripts --}}
    <livewire:scripts>
</body>

</html>
