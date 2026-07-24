@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <div class="mb-8">

        <h1 class="text-3xl md:text-4xl font-bold text-white">

            ✏️ Edit Anggota

        </h1>

        <p class="text-gray-400 mt-2">

            Perbarui data anggota UKM Seni & Budaya.

        </p>

    </div>


    @if ($errors->any())

        <div class="bg-red-600 text-white rounded-xl p-5 mb-6">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="bg-slate-900 rounded-3xl shadow-xl p-6 md:p-8">

        <form action="{{ route('members.update', $member) }}" method="POST">

            @csrf

            @method('PUT')


            <div class="mb-6">

                <label class="block text-white mb-2">

                    Nama Lengkap

                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $member->name) }}"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

            </div>


            <div class="mb-6">

                <label class="block text-white mb-2">

                    NIM

                </label>

                <input
                    type="text"
                    name="nim"
                    value="{{ old('nim', $member->nim) }}"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

            </div>


            <div class="mb-6">

                <label class="block text-white mb-2">

                    Bidang

                </label>

                <select
                    name="bidang"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

                    <option value="Musik"
                        {{ $member->bidang == 'Musik' ? 'selected' : '' }}>

                        Musik

                    </option>

                    <option value="Tari"
                        {{ $member->bidang == 'Tari' ? 'selected' : '' }}>

                        Tari

                    </option>

                    <option value="Teater"
                        {{ $member->bidang == 'Teater' ? 'selected' : '' }}>

                        Teater

                    </option>

                    <option value="Vokal"
                        {{ $member->bidang == 'Vokal' ? 'selected' : '' }}>

                        Vokal

                    </option>

                    <option value="Desain Fotografi"
                        {{ $member->bidang == 'Desain Fotografi' ? 'selected' : '' }}>

                        Desain Fotografi

                    </option>

                </select>

            </div>


            <div class="mb-8">

                <label class="block text-white mb-2">

                    Email

                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $member->email) }}"
                    class="w-full rounded-xl bg-slate-800 border border-slate-700 text-white px-4 py-3">

            </div>


            <div class="flex flex-col md:flex-row gap-3">

                <button
                    type="submit"
                    class="w-full md:w-auto bg-cyan-500 hover:bg-cyan-600 text-white px-8 py-3 rounded-xl font-semibold transition">

                    💾 Simpan Perubahan

                </button>

                <a
                    href="{{ route('members.index') }}"
                    class="w-full md:w-auto text-center bg-gray-700 hover:bg-gray-600 text-white px-8 py-3 rounded-xl transition">

                    Batal

                </a>

            </div>

        </form>

    </div>

</div>

@endsection