<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AdminAttendanceController;

/*
|--------------------------------------------------------------------------
| Halaman Awal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Login Google
|--------------------------------------------------------------------------
*/

Route::get('/auth/google', [GoogleController::class, 'redirect'])
    ->name('google.login');

Route::get('/auth/google/callback', [GoogleController::class, 'callback'])
    ->name('google.callback');

/*
|--------------------------------------------------------------------------
| Area Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('members', MemberController::class)
            ->except(['show']);

        // Halaman Data Absensi
        Route::get('/attendance', [AdminAttendanceController::class, 'index'])
            ->name('admin.attendance');

        // Export PDF
        Route::get('/attendance/pdf', [AdminAttendanceController::class, 'exportPdf'])
            ->name('admin.attendance.pdf');

    });

/*
|--------------------------------------------------------------------------
| Area User
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'user'])
    ->prefix('user')
    ->group(function () {

        Route::get('/dashboard', [UserDashboardController::class, 'index'])
            ->name('user.dashboard');

        // Tombol Hadir
        Route::post('/attendance', [AttendanceController::class, 'store'])
            ->name('attendance.store');

    });

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| Route Sementara Membuat Admin
|--------------------------------------------------------------------------
*/

Route::get('/create-admin', function () {

    User::updateOrCreate(
        [
            'email' => 'admin@ukmseni.com',
        ],
        [
            'name' => 'Administrator',
            'nim' => 'ADMIN001',
            'bidang' => 'Kesekretariatan',
            'google_id' => null,
            'avatar' => null,
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]
    );

    return 'Admin berhasil dibuat!';
});

require __DIR__.'/auth.php';