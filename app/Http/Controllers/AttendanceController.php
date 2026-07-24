<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Simpan absensi user.
     */
    public function store()
    {
        $user = Auth::user();

        // Cek apakah user sudah absen hari ini
        $sudahAbsen = Attendance::where('user_id', $user->id)
            ->whereDate('tanggal', today())
            ->exists();

        if ($sudahAbsen) {

            return redirect()
                ->route('user.dashboard')
                ->with('error', 'Anda sudah melakukan absensi hari ini.');

        }

        Attendance::create([

            'user_id'    => $user->id,

            'tanggal'    => today(),

            'jam_masuk'  => now()->format('H:i:s'),

            'status'     => 'Hadir',

            'keterangan' => null,

        ]);

        return redirect()
            ->route('user.dashboard')
            ->with('success', 'Absensi berhasil dilakukan.');
    }
}