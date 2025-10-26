<!DOCTYPE html>
<html lang="{{ config('app.locale', 'id') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - {{ $desc ?? '' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="navbar bg-base-100 shadow-sm @auth hidden @endauth">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">Startup</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
        </div>
    </div>
    @auth
    <livewire:home>
    @endauth
    @livewireScripts
</body>
</html>