<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group list-group-numbered mt-4">
            {{-- Kode anda selanjutnya letakkan di sini --}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>

        </div>
