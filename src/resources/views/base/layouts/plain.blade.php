<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
    @include(backpack_view('inc.head'))
</head>

@yield('body')

@yield('content')

@include(backpack_view('layouts.vendor-scripts'))
</body>
</html>
