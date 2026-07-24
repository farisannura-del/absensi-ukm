<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminAttendanceController extends Controller
{
    /**
     * Halaman data absensi
     */
    public function index()
    {
        $attendances = Attendance::with('user')
            ->latest()
            ->get();

        return view('admin.attendance.index', compact('attendances'));
    }

    /**
     * Export PDF
     */
    public function exportPdf()
    {
        $attendances = Attendance::with('user')
            ->latest()
            ->get();

        $pdf = Pdf::loadView(
            'admin.attendance.pdf',
            compact('attendances')
        );

        return $pdf->download('Laporan_Absensi_UKM.pdf');
    }
}