<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>

    <body id="app-layout">

        <div class="container-fluid">
           @include('partials._nav')

            @include('partials._messages')

            @yield('content')

            @include('partials._footer')
            
            @include('partials._javascript')

        </div>
        @yield('scripts')

    </body>
</html>
