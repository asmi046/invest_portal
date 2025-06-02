<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:site_name" content="Инвестиционный портал Курской Области" />
    <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <meta name="_token" content="{{ csrf_token() }}">

    <meta name="yandex-verification" content="bf37792a96665959" />

    @vite([
        'resources/css/app.css',
        'public/scss/main.scss',
        'resources/js/app.js'
    ])
</head>
<body>
    <x-vizpanel.main></x-vizpanel.main>
    <x-menu.side-menu></x-menu.side-menu>

    @if (Request::route() && Request::route()->named('home'))
        <x-header></x-header>
    @else
        <x-header-inner>
            <x-slot:banner>@yield('banner')</x-slot>

            <x-slot:title>
                @yield('page_title')
            </x-slot>
        </x-header-inner>
    @endif

    <main id="main">
        @yield('main')
    </main>
    <x-footer></x-footer>
    <x-gread-shadow></x-gread-shadow>
</body>
</html>
