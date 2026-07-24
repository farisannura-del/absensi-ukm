<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Total anggota (tidak menghitung admin)
        $totalAnggota = User::where('role', 'user')->count();

        // Total bidang yang ada
        $totalBidang = User::where('role', 'user')
            ->whereNotNull('bidang')
            ->distinct()
            ->count('bidang');

        // Jumlah anggota per bidang
        $bidang = User::where('role', 'user')
            ->selectRaw('bidang, COUNT(*) as total')
            ->groupBy('bidang')
            ->orderBy('bidang')
            ->get();

        return view('dashboard', compact(
            'totalAnggota',
            'totalBidang',
            'bidang'
        ));
    }
}