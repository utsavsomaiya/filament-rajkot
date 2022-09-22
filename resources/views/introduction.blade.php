<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduction</title>
    <link rel="icon" type="image/png" href="https://avatars.githubusercontent.com/utsavsomaiya">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto Mono', 'monospace'],
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-gray-900 text-white font-sans">
    <header class="flex flex-col items-center pt-4 sm:pt-8 px-4">
        <picture>
            <img src="https://avatars.githubusercontent.com/utsavsomaiya" class="w-36 h-36 sm:w-48 sm:h-48 border-8 border-gray-800 rounded-full mb-8" width="192" height="192" alt="Utsav Somaiya">
        </picture>
        <h1 class="text-3xl sm:text-6xl font-bold tracking-tight">Hello Laravel-Rajkot!!</h1>
        <h2 class="mt-4 text-lg text-center sm:text-2xl tracking-tight"> I'm <b>Utsav Somaiya</b><br class="sm:hidden">
        <span class="hidden sm:inline"> - </span>Jr. Web Developer At Freshbits Web Solutions</h2>
        <h3 class="mt-4 text-sm sm:text-base tracking-tight text-center"> Today my talk is <a href="{{ route('filament') }}" class="text-blue-300">Fun with Filament</a> </h3>
        <h3 class="mt-4 text-2xl sm:text-base tracking-tight text-center">CSS &rArr; Sorry!! We don't do that here ❌️</h3>
    </header>
</body>
</html>
