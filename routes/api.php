<?php

use App\Http\Controllers\Api\StreamerController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\SocialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public API routes (accessible externally)
Route::prefix('v1')->group(function () {
    // Streamer info
    Route::get('/streamer', [StreamerController::class, 'index']);
    Route::get('/streamer/profile', [StreamerController::class, 'profile']);
    Route::get('/streamer/stats', [StreamerController::class, 'stats']);
    
    // Schedule
    Route::get('/schedule', [ScheduleController::class, 'index']);
    Route::get('/schedule/upcoming', [ScheduleController::class, 'upcoming']);
    Route::get('/schedule/past', [ScheduleController::class, 'past']);
    
    // Social links
    Route::get('/social', [SocialController::class, 'index']);
    Route::get('/social/{platform}', [SocialController::class, 'show']);
    
    // Clips/Highlights
    Route::get('/clips', [\App\Http\Controllers\Api\ClipController::class, 'index']);
    Route::get('/clips/featured', [\App\Http\Controllers\Api\ClipController::class, 'featured']);
    
    // Chat/Community
    Route::get('/chat/rules', [\App\Http\Controllers\Api\ChatController::class, 'rules']);
    Route::get('/chat/emotes', [\App\Http\Controllers\Api\ChatController::class, 'emotes']);
});

// Health check endpoint
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
        'version' => '1.0.0',
        'service' => 'Hansa Fab API'
    ]);
});

// API Documentation redirect
Route::get('/docs', function () {
    return redirect()->away(config('app.url') . '/api/documentation');
});