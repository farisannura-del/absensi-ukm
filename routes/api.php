<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AttendanceApiController;

Route::get('/attendances', [AttendanceApiController::class, 'index']);