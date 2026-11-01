<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body class="min-h-screen antialiased dark:bg-slate-900 dark:text-yellow-50 bg-slate-50 text-black">
<header>
    <nav class="bg-blue-900 text-yellow-50 dark:bg-blue-100 dark:text-black font-sans p-4 mb-4 shadow-md shadow-black flex justify-between">
        <div>
            <a href="/home"><h2><b>Satellite Watching</b></h2></a>
        </div>

        <div class="flex justify-between">
            <div class="mx-2">
                <a href="/map">
                map
                </a>
            </div>
            <div class="mx-2">
                <a href="/issTracking">
                    iss
                </a>
            </div>
            <div class="mx-2">
                <a href="">
                    secretThirdThing
                </a>
            </div>
        </div>
    </nav>
</header>
<main class="p-4">
    {{ $slot }}
</main>
</body>
</html>
