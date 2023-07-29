<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Web Site - @yield('title', 'Defult title')</title>
    <meta content="@yield('meta-description', 'Default description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')

    <x-flash::message />

    @yield('content')

</body>
</html>
