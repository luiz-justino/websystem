<!DOCTYPE html>
<html>
    <head>
        <title>Websystem</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token('')}}">
        
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <style>
            body{
                padding: 20px;
            }

            .navbar{
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @component('component_navbar', [ "current" => $current ])
            @endcomponent
            <main role="main">
                @hasSection('body')
                @yield('body')
                @endif
            </main>
        </div>

        <div class="footer">
            <footer class="page-footer font-small">
                <div class="footer-copyright text-center py-3">© 2019 Copyright Websystem</div>
            </footer>
        </div>
    </body>
</html>
