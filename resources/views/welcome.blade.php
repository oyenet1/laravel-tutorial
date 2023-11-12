<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <h1 class="text-lg text-blue-500">This topic is route controller</h1>
    <p>My name is {{ $name }} and I am {{ $age }}years old. I school at {{ $school }}</p>
</body>

</html>
