<?php

use App\Http\Controllers\CriticalityController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('incidents', IncidentController::class);
Route::get('/criticalities', [CriticalityController::class, 'index']);
Route::get('/types', [TypeController::class, 'index']);
