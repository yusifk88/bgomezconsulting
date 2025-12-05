<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/logo.svg">
        <meta property="og:title" content="Bgomez Consulting" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://bgomezconsulting.com" />
        <meta property="og:image" content="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/bg-shot.webp" />
        <meta name="twitter:title" content="Bgomez Consulting">
        <meta name="twitter:description" content="We make taxes less taxing">
        <meta name="twitter:image" content="https://flobaze.atl1.cdn.digitaloceanspaces.com/public/bg-shot.webp">
        <meta name="twitter:card" content="We make taxes less taxing">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            .primary-bg{
             background-color: #1C315A;
            }
        </style>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
