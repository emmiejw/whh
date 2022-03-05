<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
{{--        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">--}}
{{--        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">--}}
{{--        <script src="https://cdn.tiny.cloud/1/bipmow4lkz6ivlma357ta46a3z9l0e2dpuxap9eqizuo2j11/tinymce/5/tinymce.min.js"></script>--}}
{{--        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>--}}
{{--        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>--}}
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:8080/js/bundle.js"></script>
        @endenv
    </body>
</html>
