<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
    </head>
    <body class="antialiased">
    @livewire('hello-world')

    @livewireScripts
    </body>
</html>
