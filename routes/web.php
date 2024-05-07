<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UTSController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ujian', [UTSController::class, 'index']);

Route::get('ujian/create', [UTSController::class, 'create']);
Route::post('ujian', [UTSController::class, 'store']);

// Route::get('ujian/{id}', [UTSController::class, 'show']);

// Route::get('ujian/{id}/edit', [UTSController::class, 'edit']);
// Route::put('ujian/{id}', [UTSController::class, 'update']);

// Route::delete('ujian/{id}', [UTSController::class, 'destroy']);
