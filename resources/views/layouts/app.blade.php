<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tinymce -->
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite('resources/css/app.css')
    @vite('resources/js/flash-messages.js')
</head>

<body>
    <div id="app">
        <nav class="bg-white border-gray-200 shadow-sm dark:bg-gray-900 fixed w-full z-50">
            <div class="container mx-auto px-4 flex flex-wrap items-center justify-between">
                <a class="flex items-center text-xl font-semibold text-gray-900 dark:text-white"
                    href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    type="button" data-collapse-toggle="navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false">
                    <span class="sr-only">{{ __('Toggle navigation') }}</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbarSupportedContent">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown relative ">
                                <button id="navbarDropdown"
                                    class=" py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent cursor-pointer focus:outline-none"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 dark:bg-gray-800 z-50"
                                    aria-labelledby="navbarDropdown">
                                    <!-- home -->
                                    <a class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"
                                    href="{{ route('home') }}">
                                    {{ __('Home') }} 
                                </a>
                                <!-- news -->
                                <a class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"
                                    href="{{ route('news.index') }}">
                                    {{ __('News') }}
                                </a>

                                <!-- create new -->
                                <a class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"
                                    href="{{ route('news.create') }}">
                                    {{ __('Create new') }}
                                </a>
                                <!-- Logout -->
                                    <a class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-16 py-4">
            @yield('content')
        </main>
    </div>

    <script>
        document.getElementById('navbarDropdown').addEventListener('click', function() { // llamamos al elemento con el id 'navbarDropdown' 
            let dropdownMenu = document.querySelector('.dropdown-menu'); // llamamos al elemento con la clase 'dropdown-menu'
            dropdownMenu.classList.toggle('hidden'); // añadimos o eliminamos la clase 'hidden' al elemento con la clase 'dropdown-menu
        });

        let mobileNavButton = document.querySelector('[data-collapse-toggle="navbarSupportedContent"]'); // llamamos al elemento con el atributo 'data-collapse-toggle="navbarSupportedContent"'
        mobileNavButton.addEventListener('click', function() {
            let dropdownMenu = document.getElementById('navbarSupportedContent');
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
