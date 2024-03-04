<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    {{-- head start  --}}
    @include($myTemplate.'._1header.head') {{-- points to views/shop/head.blade.php --}}


    @stack('header-scripts') {{-- to push any javascript scrits here use @push('scripts') --}}
    @stack('header-styles') {{-- to push any javascript scrits here use @push('styles') --}}
    {{-- head end  --}}

</head>

<body class="{{Route::current()->getName()=='index'? Route::current()->getName():''}}">

    {{-- header start  --}}
    @include($myTemplate.'._1header.header') {{-- points to views/shop/header.blade.php --}}
    {{-- header end  --}}




    {{-- content start  --}}
    @yield('content') {{-- points to any page that uses @extends('layouts.default')  views/pages/home.blade.php --}}
    {{-- content end  --}}

    {{-- footer start  --}}
    @include($myTemplate.'._2footer.footer') {{-- points to views/shop/footer.blade.php --}}
    {{-- footer end  --}}

    @stack('footer-scripts') {{-- to push any javascript scrits here use @push('scripts') --}}
    @stack('footer-styles')
</body>

</html>
