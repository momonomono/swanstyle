<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        <header-component></header-component>

        <button class="c-button__reserve">
            予約
        </button>
        @yield('body')
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>