<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Template Vuetify </title>


    <link rel="stylesheet" href="{!! asset('css/loader.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}

</head>
<body>
    <div id="app"  >
        <app></app>
    </div>
</body>
</html>