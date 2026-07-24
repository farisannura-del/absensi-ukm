@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="mb-8">

        <h1 class="text-3xl md:text-4xl font-bold text-white">

            Tambah Anggota

        </h1>

        <p class="text-gray-400 mt-2">

            Tambahkan data anggota UKM Seni & Budaya.

        </p>

    </div>


    <div class="bg-slate-900 rounded-3xl shadow-xl p-6 md:p-8">

        <form action="{{ route('members.store') }}" method="POST">

            @csrf

            <div class="mb-5">

                <label class="block text-gray-300 mb-2">

                    Nama

                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

            </div>


            <div class="mb-5">

                <label class="block text-gray-300 mb-2">

                    NIM

                </label>

                <input
                    type="text"
                    name="nim"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

            </div>


            <div class="mb-5">

                <label class="block text-gray-300 mb-2">

                    Bidang

                </label>

                <select
                    name="bidang"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

                    <option>Musik</option>
                    <option>Tari</option>
                    <option>Teater</option>
                    <option>Vokal</option>
                    <option>Desain Fotografi</option>

                </select>

            </div>


            <div class="mb-8">

                <label class="block text-gray-300 mb-2">

                    Email

                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

            </div>


            <div class="flex flex-col md:flex-row gap-3">

                <button
                    type="submit"
                    class="w-full md:w-auto bg-cyan-500 hover:bg-cyan-600 px-6 py-3 rounded-xl text-white font-semibold transition">

                    💾 Simpan Anggota

                </button>

                <a
                    href="{{ route('members.index') }}"
                    class="w-full md:w-auto text-center bg-slate-700 hover:bg-slate-600 px-6 py-3 rounded-xl text-white transition">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection