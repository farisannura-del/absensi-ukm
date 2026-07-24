<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attendance;

class AttendanceApiController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('user')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data absensi berhasil diambil.',
            'data' => $attendances
        ]);
    }
}