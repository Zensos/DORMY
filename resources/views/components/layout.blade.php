<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DORMY</title>
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl@4.5.2/dist/maplibre-gl.css" />
    <script src="https://unpkg.com/maplibre-gl@4.5.2/dist/maplibre-gl.js"></script>
    <script src="https://unpkg.com/@turf/turf@6.5.0/turf.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

</head>

<body>
    <x-navbar></x-navbar>
    <div class="flex flex-col items-center min-h-screen h-full">
        {{ $slot }}
    </div>
    <footer class="flex items-center justify-center h-32 bg-[#DFD3C5] mt-20 w-full">
        HE
    </footer>

</body>

</html>
