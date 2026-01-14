<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO BASIC -->
    <title>@yield('title', config('app.name', 'Mushola Miftahul Iman'))</title>
    <meta name="description" content="Website resmi Mushola Miftahul Iman. Informasi kegiatan, berita, galeri, dan donasi.">
    <meta name="author" content="Mushola Miftahul Iman">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Extra Styles -->
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex flex-col" x-data="{ open: false }">

        <!-- NAVBAR -->
        @include('components.navbar')

        <!-- HEADER (OPTIONAL) -->
        @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- MAIN CONTENT -->
        <main class="flex-1 py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>

        <!-- FOOTER -->
        @include('components.footer')

    </div>

    <!-- Extra Scripts -->
    @stack('scripts')

</body>

</html>