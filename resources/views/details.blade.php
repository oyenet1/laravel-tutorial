<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased p-6 bg-gray-200">
    <div class="bg-white p-4 rounded-lg border min-h-lg max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold uppercase text-blue-500">This topic is route controller details page</h1>
        <p class="text-lg">My name is {{ $name }} and I am {{ $age }}years old. I school at
            {{ $school }}</p>

    </div>
</body>

</html>
