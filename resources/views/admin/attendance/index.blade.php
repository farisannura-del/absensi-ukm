@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-8">

        <div>

            <h1 class="text-3xl md:text-4xl font-bold text-white">

                📅 Data Absensi

            </h1>

            <p class="text-gray-400 mt-2">

                Daftar seluruh absensi anggota UKM Seni & Budaya.

            </p>

        </div>

        <a
            href="{{ route('admin.attendance.pdf') }}"
            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold transition text-center">

            📄 Export PDF

        </a>

    </div>


    <!-- =======================
         DESKTOP TABLE
    ======================== -->

    <div class="hidden lg:block bg-slate-900 rounded-3xl overflow-hidden shadow-xl">

        <table class="w-full">

            <thead class="bg-slate-800">

                <tr>

                    <th class="p-5 text-left text-gray-300">No</th>

                    <th class="p-5 text-left text-gray-300">Nama</th>

                    <th class="p-5 text-left text-gray-300">NIM</th>

                    <th class="p-5 text-left text-gray-300">Bidang</th>

                    <th class="p-5 text-left text-gray-300">Tanggal</th>

                    <th class="p-5 text-left text-gray-300">Jam Masuk</th>

                    <th class="p-5 text-left text-gray-300">Status</th>

                </tr>

            </thead>

            <tbody>

                @forelse($attendances as $attendance)

                <tr class="border-b border-slate-800 hover:bg-slate-800">

                    <td class="p-5">

                        {{ $loop->iteration }}

                    </td>

                    <td class="p-5">

                        {{ $attendance->user->name }}

                    </td>

                    <td class="p-5">

                        {{ $attendance->user->nim }}

                    </td>

                    <td class="p-5 text-cyan-400">

                        {{ $attendance->user->bidang }}

                    </td>

                    <td class="p-5">

                        {{ \Carbon\Carbon::parse($attendance->tanggal)->format('d-m-Y') }}

                    </td>

                    <td class="p-5">

                        {{ $attendance->jam_masuk }}

                    </td>

                    <td class="p-5">

                        <span class="bg-green-600 px-3 py-1 rounded-lg">

                            {{ $attendance->status }}

                        </span>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="7" class="text-center text-gray-400 p-10">

                        Belum ada data absensi.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    <!-- =======================
         MOBILE CARD
    ======================== -->

    <div class="lg:hidden space-y-4">

        @forelse($attendances as $attendance)

        <div class="bg-slate-900 rounded-2xl p-5 shadow">

            <div class="flex justify-between items-center mb-4">

                <h2 class="font-bold text-lg">

                    {{ $attendance->user->name }}

                </h2>

                <span class="bg-green-600 px-3 py-1 rounded-lg text-sm">

                    {{ $attendance->status }}

                </span>

            </div>

            <div class="space-y-2 text-sm">

                <p>

                    <span class="text-gray-400">NIM :</span>

                    {{ $attendance->user->nim }}

                </p>

                <p>

                    <span class="text-gray-400">Bidang :</span>

                    <span class="text-cyan-400">

                        {{ $attendance->user->bidang }}

                    </span>

                </p>

                <p>

                    <span class="text-gray-400">Tanggal :</span>

                    {{ \Carbon\Carbon::parse($attendance->tanggal)->format('d-m-Y') }}

                </p>

                <p>

                    <span class="text-gray-400">Jam Masuk :</span>

                    {{ $attendance->jam_masuk }}

                </p>

            </div>

        </div>

        @empty

        <div class="bg-slate-900 rounded-2xl p-10 text-center text-gray-400">

            Belum ada data absensi.

        </div>

        @endforelse

    </div>

</div>

@endsection