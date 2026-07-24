<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Absensi UKM Seni & Budaya</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-slate-950 text-white">

<div class="min-h-screen md:flex">

    <!-- SIDEBAR -->

    <aside class="w-full md:w-72 bg-slate-900 shadow-2xl flex flex-col">

        <div class="p-8 border-b border-slate-700">

            <h1 class="text-3xl font-bold text-cyan-400">

                🎨 UKM Seni

            </h1>

            <p class="text-gray-400 mt-2">

                Sistem Absensi

            </p>

        </div>

        <nav class="flex-1 mt-4 md:mt-6">

            <a
                href="{{ route('dashboard') }}"
                class="block px-8 py-4 hover:bg-slate-800 transition {{ request()->routeIs('dashboard') ? 'bg-slate-800 text-cyan-400 font-semibold' : '' }}">

                🏠 Dashboard

            </a>

            <a
                href="{{ route('members.index') }}"
                class="block px-8 py-4 hover:bg-slate-800 transition {{ request()->routeIs('members.*') ? 'bg-slate-800 text-cyan-400 font-semibold' : '' }}">

                👥 Anggota

            </a>

            <a
                href="{{ route('admin.attendance') }}"
                class="block px-8 py-4 hover:bg-slate-800 transition {{ request()->routeIs('admin.attendance*') ? 'bg-slate-800 text-cyan-400 font-semibold' : '' }}">

                📅 Absensi

            </a>

        </nav>

        <div class="border-t border-slate-700">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    type="submit"
                    class="w-full text-left px-8 py-4 text-red-400 hover:bg-slate-800 transition">

                    🚪 Logout

                </button>

            </form>

        </div>

    </aside>

    <!-- CONTENT -->

    <main class="flex-1 p-5 md:p-10 overflow-x-auto">

        @yield('content')

    </main>

</div>

</body>

</html>