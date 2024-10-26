<?php

use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('lecturers', [LecturerController::class, 'index']);
Route::post('lecturers', [LecturerController::class, 'store']);
Route::put('lecturers/{id}', [LecturerController::class, 'update']);
Route::delete('lecturers/{id}', [LecturerController::class, 'destroy']);
