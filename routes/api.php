<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('lecturers', [LecturerController::class, 'index']);
    Route::post('lecturers', [LecturerController::class, 'store']);
    Route::put('lecturers/{id}', [LecturerController::class, 'update']);
    Route::delete('lecturers/{id}', [LecturerController::class, 'destroy']);
});

// api url: api/v1/lecturers