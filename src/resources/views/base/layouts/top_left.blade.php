<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
  @include(backpack_view('inc.head'))

</head>
@php
    $theme = config('backpack.base.view_namespace');
@endphp
@section('body')
    @if($theme === 'stoke-horizontal::')
    <body data-topbar="dark" data-layout="horizontal">
    @endif
    @if($theme === 'stoke-vertical::')
    <body data-sidebar="dark">
    @endif
    @show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @if($theme === 'stoke-horizontal::')
            @include(backpack_view('type.horizontal'))
            @include(backpack_view('inc.sidebar-horizontal'))
        @endif
        @if($theme === 'stoke-vertical::')
            @include(backpack_view('type.vertical'))
            @include(backpack_view('inc.vertical-sidebar'))
        @endif

        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->

                <div class="container-fluid">
                    @yield('before_breadcrumbs_widgets')

                    @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))

                    @yield('after_breadcrumbs_widgets')

                    @yield('before_content_widgets')

                    @yield('content')

                    @yield('after_content_widgets')
                </div> <!-- content -->
            </div>
            @include(backpack_view('inc.footer'))
        </div>
    </div>

  @yield('before_scripts')
  @stack('before_scripts')

    @include(backpack_view('layouts.vendor-scripts'))

  @yield('after_scripts')
  @stack('after_scripts')
</body>
</html>
