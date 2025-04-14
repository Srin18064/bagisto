<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Custom Theme</title>
    <link rel="stylesheet" href="{{ asset('themes/CustomTheme/assets/css/style.css') }}">
</head>
<body>
    @extends('themes.CustomTheme.views.layouts.master')

    @section('content')
        <div class="home-banner">
            <h1>Welcome to Our Custom Theme</h1>
            <p>Your one-stop shop for all your needs!</p>
        </div>
        <div class="featured-products">
            <h2>Featured Products</h2>
            <!-- Loop through featured products here -->
        </div>
    @endsection

    <script src="{{ asset('themes/CustomTheme/assets/js/script.js') }}"></script>
</body>
</html>