<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Tampilkan daftar anggota
     */
    public function index()
    {
        $members = User::where('role', 'user')
            ->orderBy('bidang')
            ->orderBy('name')
            ->get();

        return view('members.index', compact('members'));
    }

    /**
     * Form tambah anggota
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Simpan anggota
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'nim'     => 'required',
            'bidang'  => 'required',
            'email'   => 'required|email|unique:users,email',
        ]);

        User::create([
            'name'     => $request->name,
            'nim'      => $request->nim,
            'bidang'   => $request->bidang,
            'email'    => $request->email,
            'password' => bcrypt('12345678'),
            'role'     => 'user',
        ]);

        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Form edit anggota
     */
    public function edit(User $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update anggota
     */
    public function update(Request $request, User $member)
    {
        $request->validate([
            'name'    => 'required',
            'nim'     => 'required',
            'bidang'  => 'required',
            'email'   => 'required|email|unique:users,email,' . $member->id,
        ]);

        $member->update([
            'name'    => $request->name,
            'nim'     => $request->nim,
            'bidang'  => $request->bidang,
            'email'   => $request->email,
        ]);

        return redirect()->route('members.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
    }

    /**
     * Hapus anggota
     */
    public function destroy(User $member)
    {
        $member->delete();

        return redirect()->route('members.index')
            ->with('success', 'Anggota berhasil dihapus.');
    }
}