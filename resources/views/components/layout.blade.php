<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-db279ac8.css') }}">
{{--    <script defer src="{{ asset('build/assets/app-a6d2e222.js') }}"></script>--}}

{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="font-sans antialiased">
    <div class="site-wrapper">
        <div class="site-container">
            <div class="app-container">
                <x-nav />
                <x-hero />
                {{ $slot  }}
            </div>
        </div>
    </div>
</body>
</html>
