<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Mathematics</title>
</head>
<body class="antialiased">
<div id="app">
    @section('content')
        <example-component></example-component>
    @endsection

    @yield ('content')
</div>
</body>
</html>
