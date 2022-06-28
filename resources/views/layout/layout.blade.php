<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/img/favicon_swanstyle.ico') }}">
    <meta name="keywords" content="エステ,多治見市,swanstyle,小顔マッサージ">
    <meta name="description">
    <title>エステサロン SWANSTYLE </title>
</head>
<body>
    <div id="app">
        <header-component></header-component>

        <div class="u-bg__main">
            <div class="l-header__space"></div>

            @yield('body')
        </div>

        <footer-component></footer-component>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>