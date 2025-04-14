<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Custom Theme')</title>
    <link rel="stylesheet" href="{{ asset('themes/CustomTheme/assets/css/style.css') }}">
    <script src="{{ asset('themes/CustomTheme/assets/js/script.js') }}" defer></script>
</head>
<body>
    <header>
        @include('CustomTheme::partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('CustomTheme::partials.footer')
    </footer>
</body>
</html>