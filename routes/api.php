<?php

use App\Http\Controllers\ExamDutyController;
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

    Route::get('exam-duties/getAll', [ExamDutyController::class, 'index']);
    Route::get('exam-duties/{id}', [ExamDutyController::class, 'show']);
    Route::post('exam-duties/add', [ExamDutyController::class, 'store']);
    Route::put('exam-duties/edit/{id}', [ExamDutyController::class, 'update']);
    Route::delete('exam-duties/{id}', [ExamDutyController::class, 'destroy']);
});

// api url: api/v1/lecturers