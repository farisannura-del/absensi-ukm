<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard User | Absensi UKM Seni & Budaya</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-slate-950 text-white min-h-screen">

    <div class="min-h-screen flex items-center justify-center px-6">

        <div class="w-full max-w-2xl">

            @yield('content')

        </div>

    </div>

</body>

</html>