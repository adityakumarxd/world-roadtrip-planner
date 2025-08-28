<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadTripController;

// Redirect root to trips list
Route::get('/', function () {
    return redirect('/trips');
});

// Road Trips UI routes
Route::get('/trips', [RoadTripController::class, 'index']);
Route::get('/trips/create', [RoadTripController::class, 'create']);
Route::post('/trips', [RoadTripController::class, 'store']);
Route::get('/trips/{id}', [RoadTripController::class, 'show']);
Route::post('/trips/{id}/reviews', [RoadTripController::class, 'addReview']);
