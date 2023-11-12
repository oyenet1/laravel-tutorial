<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 p-6">
    <div class="bg-white max-w-lg mx-auto rounded-lg border p-4 min-h-sm">
        <h1 class="text-3xl font-bold text-blue-500">
            Hello world!
        </h1>
        <p>This is an about page</p>
        <p>My name is <?php echo $name; ?> </p>
        <p>Another to write my name using blade {{ $name }} </p>
        <p class="text-xl">I am {{ $age }}years old</p>
    </div>
</body>

</html>
