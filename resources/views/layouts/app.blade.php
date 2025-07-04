<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap & Custom CSS -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <!-- Page-specific CSS (solo se necessario per casi speciali) -->
    @stack('styles')
</head>

<body>
    <div id="app">
        @include('partials.navbar')

        <main class="main-content">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <!-- Page-specific JavaScript -->
    @stack('scripts')
</body>

</html>