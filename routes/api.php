<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
Route::fallback(function () { return response()->json('Página Não Encontrada!'); });

Route::group(['middleware' => ['apiJwt']], function(){
    Route::get('users', [App\Http\Controllers\Api\UsersController::class, 'index'])->name('users');
    Route::apiResource('patients', 'App\Http\Controllers\Api\PatientsController');
    Route::apiResource('appointments', 'App\Http\Controllers\Api\AppointmentsController');
    Route::apiResource('doctors', 'App\Http\Controllers\Api\DoctorsController');
    Route::apiResource('specialtys', 'App\Http\Controllers\Api\SpecialtysController');
    Route::apiResource('procedures', 'App\Http\Controllers\Api\ProceduresController');
    Route::apiResource('healthplans', 'App\Http\Controllers\Api\HealthPlanController');
    Route::post('logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->name('logout');
});


