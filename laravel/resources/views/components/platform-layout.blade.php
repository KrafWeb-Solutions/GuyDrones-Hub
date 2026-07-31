<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GuyDrones Hub - Platform</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white">

        <div class="p-6 border-b border-slate-700">
            <h1 class="text-2xl font-bold">
                GuyDrones Hub
            </h1>

            <p class="text-sm text-slate-400">
                Platform Admin
            </p>
        </div>

        <nav class="mt-6">
            <a href="{{ route('platform.dashboard') }}"
               class="block px-6 py-3 hover:bg-slate-800">
                Dashboard
            </a>
        </nav>

    </aside>

    <!-- Main -->
    <main class="flex-1">

        <header class="bg-white shadow px-8 py-5 flex justify-between items-center">

            <h2 class="text-2xl font-semibold">
                Platform Dashboard
            </h2>

            <div>
                {{ auth()->user()?->name }}
            </div>

        </header>

        <section class="p-8">

            {{ $slot }}

        </section>

    </main>

</div>

</body>
</html>