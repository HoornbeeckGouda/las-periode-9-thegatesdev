@props(['head', 'title'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    {{ $head ?? '' }}
</head>
<body {{ $attributes->class(['view']) }}>
    {{ $slot }}
</body>
</html>