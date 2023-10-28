<?php

use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('events', EventController::class);
Route::apiResource('events.attendees', AttendeeController::class)->scoped(['attendee' => 'event']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
