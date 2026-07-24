@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-950 py-8">

    <div class="max-w-7xl mx-auto px-4 md:px-6">

        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-6 mb-8">

            <div>

                <h1 class="text-3xl md:text-4xl font-bold text-white">

                    Daftar Anggota

                </h1>

                <p class="text-gray-400 mt-2">

                    Kelola seluruh anggota UKM Seni & Budaya.

                </p>

            </div>

            <a
                href="{{ route('members.create') }}"
                class="w-full md:w-auto text-center bg-cyan-500 hover:bg-cyan-600 px-6 py-3 rounded-xl text-white font-semibold transition">

                + Tambah Anggota

            </a>

        </div>


        @if(session('success'))

            <div class="bg-green-600 text-white p-4 rounded-xl mb-6">

                {{ session('success') }}

            </div>

        @endif


        <div class="bg-slate-900 rounded-3xl shadow-xl overflow-hidden">

            <div class="overflow-x-auto">

                <table class="w-full min-w-[900px]">

                    <thead class="bg-slate-800">

                        <tr>

                            <th class="p-5 text-left text-gray-300">No</th>

                            <th class="p-5 text-left text-gray-300">Nama</th>

                            <th class="p-5 text-left text-gray-300">NIM</th>

                            <th class="p-5 text-left text-gray-300">Bidang</th>

                            <th class="p-5 text-left text-gray-300">Email</th>

                            <th class="p-5 text-center text-gray-300">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($members as $member)

                        <tr class="border-b border-slate-800 hover:bg-slate-800">

                            <td class="p-5 text-white">

                                {{ $loop->iteration }}

                            </td>

                            <td class="p-5 text-white font-semibold">

                                {{ $member->name }}

                            </td>

                            <td class="p-5 text-gray-300">

                                {{ $member->nim }}

                            </td>

                            <td class="p-5 text-cyan-400">

                                {{ $member->bidang }}

                            </td>

                            <td class="p-5 text-gray-300">

                                {{ $member->email }}

                            </td>

                            <td class="p-5">

                                <div class="flex justify-center gap-2 whitespace-nowrap">

                                    <a
                                        href="{{ route('members.edit', $member) }}"
                                        class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded-lg text-white">

                                        Edit

                                    </a>

                                    <form
                                        action="{{ route('members.destroy', $member) }}"
                                        method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            onclick="return confirm('Yakin ingin menghapus anggota ini?')"
                                            class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg text-white">

                                            Hapus

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6"
                                class="text-center p-10 text-gray-400">

                                Belum ada anggota.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection