<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Electro') }}</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="/resources/css/font-awesome.min.css">
	
    <!-- Scripts -->
    <script src="{{ asset('/public/js/all.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('/public/css/all.css') }}" rel="stylesheet">
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
