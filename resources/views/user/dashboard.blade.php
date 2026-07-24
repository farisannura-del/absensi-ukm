@extends('layouts.user')

@section('content')

<div class="bg-slate-900 rounded-3xl shadow-2xl p-6 md:p-10">

    <div class="text-center">

        <h1 class="text-3xl md:text-4xl font-bold text-cyan-400">

            🎨 UKM Seni & Budaya

        </h1>

        <p class="text-gray-400 mt-3">

            Sistem Absensi Anggota

        </p>

        <h2 class="text-xl md:text-2xl font-bold mt-8">

            Halo, {{ $user->name }} 👋

        </h2>

    </div>

    <div class="mt-10 space-y-6">

        <div>

            <p class="text-gray-400">

                Nama

            </p>

            <h3 class="text-xl md:text-2xl font-bold">

                {{ $user->name }}

            </h3>

        </div>

        <div>

            <p class="text-gray-400">

                NIM

            </p>

            <h3 class="text-xl md:text-2xl font-bold">

                {{ $user->nim }}

            </h3>

        </div>

        <div>

            <p class="text-gray-400">

                Bidang

            </p>

            <h3 class="text-xl md:text-2xl font-bold text-cyan-400">

                {{ $user->bidang }}

            </h3>

        </div>

    </div>

    <div class="mt-10">

        @if($attendance)

            <div class="bg-green-700 rounded-2xl p-6">

                <h3 class="text-xl md:text-2xl font-bold">

                    ✅ Sudah Hadir Hari Ini

                </h3>

                <div class="mt-5 space-y-2">

                    <p>

                        <strong>Tanggal :</strong>

                        {{ \Carbon\Carbon::parse($attendance->tanggal)->format('d-m-Y') }}

                    </p>

                    <p>

                        <strong>Jam Masuk :</strong>

                        {{ $attendance->jam_masuk }}

                    </p>

                    <p>

                        <strong>Status :</strong>

                        {{ $attendance->status }}

                    </p>

                </div>

            </div>

        @else

            <form
                action="{{ route('attendance.store') }}"
                method="POST">

                @csrf

                <button
                    class="w-full bg-cyan-500 hover:bg-cyan-600 transition rounded-xl py-4 text-xl md:text-2xl font-bold">

                    ✅ HADIR

                </button>

            </form>

        @endif

    </div>

    <div class="mt-8">

        <form
            action="{{ route('logout') }}"
            method="POST">

            @csrf

            <button
                class="w-full bg-red-600 hover:bg-red-700 transition rounded-xl py-4 text-lg md:text-xl font-bold">

                🚪 Logout

            </button>

        </form>

    </div>

</div>

@endsection