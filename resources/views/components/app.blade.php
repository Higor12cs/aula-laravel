@props([
    'title',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body data-bs-theme="dark">
    <x-navbar />

    <div class="container py-5">

        <x-alert type="success" :message="session('success')" />
        <x-alert type="error" :message="session('error')" />

        {{ $slot }}
    </div>
</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>
