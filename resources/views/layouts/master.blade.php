 <!DOCTYPE html>
<html lang="en">
 @include('includes.head')
    <body>
        @include('includes.header')
        <!-- main start -->
        @yield('main')
        <!-- main end -->
        @include('includes.footer')
        @include('includes.functions')
    </body>
</html>
