<!DOCTYPE html>
<html lang="en">
    <head>
    @include('client::layouts.includes.head')
    @stack('css')    

    </head>

    <body>
        @include('client::layouts.includes.main_header')

        @yield('content')


        @include('client::layouts.includes.main_footer')

        @stack('scripts')
    </body>
    
</html>
