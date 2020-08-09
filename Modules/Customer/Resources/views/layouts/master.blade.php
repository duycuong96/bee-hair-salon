<!DOCTYPE html>
<html lang="en">
    <head>
    @include('customer::layouts.includes.head')
    @stack('css')

    </head>

    <body>
        @include('customer::layouts.includes.main_header')

        @yield('content')


        @include('customer::layouts.includes.main_footer')

        @stack('scripts')
    </body>

</html>
