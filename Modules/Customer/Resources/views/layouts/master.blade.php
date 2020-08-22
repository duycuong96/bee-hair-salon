<!DOCTYPE html>
<html lang="en">
    <head>
    @include('customer::layouts.includes.head')
    @stack('css')

    </head>

    <body>
        @include('customer::layouts.includes.main_header')
        @include('admin::layouts.includes.main_header')

        @yield('content')


        @include('customer::layouts.includes.main_footer')

        @include('customer::layouts.includes.footer')

        @if(session('status'))
            <!-- Toastr -->
            <script>
                $(document).ready(function () {
                    toastr.options.closeButton = true;
                    toastr.options.timeOut = 6000;
                    toastr.{{session('status')}}( '{{session('message')}}' )
                });
            </script>
        @endif

        @stack('scripts')
    </body>

</html>
