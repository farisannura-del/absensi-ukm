@extends('layouts.app')

@section('content')

<div class="mb-10">

    <p class="text-cyan-400 uppercase tracking-widest">

        UKM Seni & Budaya

    </p>

    <h1 class="text-4xl md:text-5xl font-bold text-white mt-3">

        Dashboard

    </h1>

    <p class="text-gray-400 mt-3">

        Selamat datang,

        <span class="text-yellow-400">

            {{ Auth::user()->name }}

        </span>

    </p>

</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <div class="bg-slate-900 rounded-3xl p-6 md:p-8">

        <p class="text-gray-400">

            Total Anggota

        </p>

        <h1 class="text-5xl md:text-6xl font-bold text-cyan-400 mt-3">

            {{ $totalAnggota }}

        </h1>

    </div>

    <div class="bg-slate-900 rounded-3xl p-6 md:p-8">

        <p class="text-gray-400">

            Total Bidang

        </p>

        <h1 class="text-5xl md:text-6xl font-bold text-yellow-400 mt-3">

            {{ $totalBidang }}

        </h1>

    </div>

</div>


<div class="bg-slate-900 rounded-3xl mt-8 overflow-hidden">

    <div class="p-6 border-b border-slate-700">

        <h2 class="text-xl md:text-2xl text-white">

            Distribusi Bidang

        </h2>

    </div>

    <div class="overflow-x-auto">

        <table class="w-full min-w-[400px]">

            <thead class="bg-slate-800">

                <tr>

                    <th class="p-4 text-left text-gray-300">

                        Bidang

                    </th>

                    <th class="p-4 text-center text-gray-300">

                        Jumlah

                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($bidang as $item)

                <tr class="border-b border-slate-800">

                    <td class="p-4 text-white">

                        {{ $item->bidang }}

                    </td>

                    <td class="p-4 text-center text-cyan-400 font-bold">

                        {{ $item->total }}

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection