<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Porchar 32nd Street</title>

        <!-- Css -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @if(isset($output))
            {!! $output !!}
        @else
            <div id="app">1555</div>
        @endif

        <!-- Javascript -->
        <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
