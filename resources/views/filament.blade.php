<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filament</title>
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
<body class="bg-gray-900 text-white mt-2">
    <div class="grid grid-cols-2">
        <div>
            <div class="flex">
                <a href="https://tailwindcss.com/docs" class="ml-3 font-bold text-3xl underline">Tailwind CSS &rArr;</a>
                <img class="w-9 ml-3" src="https://tailwindui.com/img/logos/mark.svg?color=gray&shade=300">
            </div>
            <p class="p-8 max-w-xl font-medium text-xl">
                Rapidly build modern websites without ever leaving your HTML.
                A utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.
            </p>
        </div>
        <div>
            <div class="flex">
                <a href="https://alpinejs.dev/docs" class="ml-3 font-bold text-3xl underline">Alpine Js &rArr;</a>
                <img class="w-9 ml-3" src="https://alpinejs.dev/favicon.png">
            </div>
            <p class="p-8 max-w-xl font-medium text-xl">
                Alpine is a rugged, minimal tool for composing behavior directly in your markup. Think of it like jQuery for the modern web. Plop in a script tag and get going.
                Alpine is a collection of 15 attributes, 6 properties, and 2 methods.
            </p>
        </div>
    </div>
    <div class="grid grid-cols-2">
        <div>
            <div class="flex">
                <a href="https://laravel-livewire.com/docs" class="ml-3 font-bold text-3xl underline">Livewire &rArr;</a>
                <img class="w-9 ml-3" src="https://laravel-livewire.com/img/underwater_jelly.svg">
            </div>
            <p class="p-8 max-w-xl font-medium text-xl">
                Livewire is a full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.
                It's not like anything you've seen before. The best way to understand it is to just look at the code. Strap on your snorkel, we're diving in.
            </p>
        </div>
        <div>
            <div class="flex">
                <a href="https://laravel.com/docs" class="ml-3 font-bold text-3xl underline">Laravel &rArr;</a>
                <img class="w-9 ml-3" src="https://laravel.com/img/logomark.min.svg">
            </div>
            <p class="p-8 max-w-xl font-medium text-xl">
                This is elegant framework of php and belongs to our home..😂️
            </p>
        </div>
    </div>
</body>
</html>
