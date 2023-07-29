<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Web Site - {{ $title ?? '' }}</title>
    <meta content="{{ $metaDescription ?? 'Default meta description' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">
    <x-layouts.navegation />

    <x-flash::message />

    {{ $slot }}

    <script>
        setTimeout(function() {
			document.querySelector('div.bg-green-500').style.display = 'none';
		}, 3000);
    </script>
</body>
</html>
