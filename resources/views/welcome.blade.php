<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mission Trip BBQ</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
           @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
    </head>
    <body class="antialiased bg-eggshell">
    @include('landing._header')
    <main class="">
    @include('landing._hero')
    @include('landing._howitworks')
    @include('landing._food')
    @include('landing._about')
    @include('landing._donate')
    
    </main>
    </body>
</html>
