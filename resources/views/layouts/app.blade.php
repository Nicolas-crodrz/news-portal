<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        @include('partials._navbar')
        <main class="pt-16 py-4">
            @yield('content')
        </main>
    </div>

    <!-- script para mostrar y ocultar el dropdown -->
    <script>
        document.getElementById('navbarDropdown').addEventListener('click',
            function() {
                let dropdownMenu = document.querySelector('.dropdown-menu');
                dropdownMenu.classList.toggle('hidden');
            });

        let mobileNavButton = document.querySelector('[data-collapse-toggle="navbarSupportedContent"]');
        mobileNavButton.addEventListener('click', function() {
            let dropdownMenu = document.getElementById('navbarSupportedContent');
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
