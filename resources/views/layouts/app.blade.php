<!DOCTYPE html>
<html>
    <head>
        @yield('meta', 'Default')
    </head>
    <body>
        <div class="body">
            @yield('header', 'Default')
        
            @yield('content', 'Default')
        
            @yield('footer', 'Default')
        </div>

        @yield('js', 'Default')

    </body>
</html>
