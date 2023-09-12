<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eater') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
 
@yield('header')
 
<div class="contents">
    <!-- コンテンツ -->
    <div class="main">
        @yield('content')
    </div>
 
    <!-- 店舗一覧検索結果 -->
    <div class="sub">
        @yield('submenu')
    </div>

    <!-- 並び替え -->
    <div class="sort">
        @yield('sortList')
    </div>

</div>
 
@yield('footer')
</body>
</html>