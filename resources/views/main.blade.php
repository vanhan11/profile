	<!DOCTYPE html>
<html lang="en">
    <head>
 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="/login">
        <link rel="shortcut icon" type="image/jpg" href="" />
 
        <title>Main app</title>
 
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    <!--google font-->
    {{-- <link rel="preconnect" href="https://www.initekno.com/cloudme.fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://www.initekno.com/cloudme.fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">  --}}
 
    <style>
        /* body{
           font-family: 'Readex Pro', sans-serif;
        } */
    </style>
        <!-- JS -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
 
    <body>
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
        @yield('content')
    </body>
</html>