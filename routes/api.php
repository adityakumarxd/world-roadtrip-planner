<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadTripController;

Route::get('/trips', [RoadTripController::class, 'index']);
Route::post('/trips', [RoadTripController::class, 'store']);
Route::get('/trips/{id}', [RoadTripController::class, 'show']);
Route::post('/trips/{id}/places', [RoadTripController::class, 'addPlace']);
Route::post('/trips/{id}/reviews', [RoadTripController::class, 'addReview']);
