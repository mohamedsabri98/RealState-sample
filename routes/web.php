<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealstateController;
use App\Http\Middleware\TrackClicks;

Route::get('/', [RealstateController::class, 'index']);
Route::get('/realstate/{property_id}', [RealstateController::class, 'showItem']);
Route::get('/most-viewed', [RealstateController::class, 'mostViewed']);
