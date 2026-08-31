<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class StreamerController extends Controller
{
    /**
     * Get basic streamer information
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'name' => 'Hansa Fab',
                'display_name' => 'Hansa Fab',
                'tagline' => 'Gaming & Variety Streamer',
                'bio' => 'Welcome to my corner of the internet! I\'m Hansa Fab, a passionate gamer and variety streamer. Join me for epic gaming moments, chill vibes, and great community interactions.',
                'avatar' => asset('images/hansa-fab-avatar.png'),
                'banner' => asset('images/hansa-fab-banner.png'),
                'started_streaming' => '2023-01-15',
                'timezone' => 'Asia/Jakarta',
                'languages' => ['Indonesian', 'English'],
                'status' => 'offline',
                'current_game' => null,
                'viewer_count' => 0,
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get detailed streamer profile
     */
    public function profile(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'personal' => [
                    'real_name' => 'Hansa Fab',
                    'pronouns' => 'He/Him',
                    'location' => 'Indonesia',
                    'birthday' => '1995-07-15',
                ],
                'streaming' => [
                    'platform' => 'Twitch',
                    'channel_url' => 'https://twitch.tv/hansafab',
                    'affiliate_since' => '2023-06-20',
                    'partner_since' => null,
                    'stream_key' => '********',
                ],
                'setup' => [
                    'cpu' => 'AMD Ryzen 9 7950X',
                    'gpu' => 'NVIDIA RTX 4090',
                    'ram' => '64GB DDR5',
                    'monitor' => 'ASUS ROG Swift 360Hz',
                    'mic' => 'Shure SM7B',
                    'camera' => 'Sony A6400',
                    'capture_card' => 'Elgato 4K60 Pro',
                ],
                'favorites' => [
                    'games' => ['Valorant', 'Elden Ring', 'Minecraft', 'Cyberpunk 2077', 'Baldur\'s Gate 3'],
                    'genres' => ['FPS', 'RPG', 'Souls-like', 'Indie', 'Horror'],
                    'snacks' => ['Indomie Goreng', 'Kopi Hitam', 'Chitato'],
                ],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get streamer statistics
     */
    public function stats(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'followers' => 12500,
                'total_views' => 342000,
                'total_hours_streamed' => 1850,
                'average_viewers' => 185,
                'peak_viewers' => 1240,
                'subscribers' => 420,
                'total_clips' => 89,
                'years_streaming' => 2,
                'longest_stream' => '12 hours 34 minutes',
                'favorite_game_hours' => [
                    'Valorant' => 520,
                    'Elden Ring' => 180,
                    'Minecraft' => 340,
                    'Just Chatting' => 280,
                    'Cyberpunk 2077' => 150,
                ],
                'monthly_stats' => [
                    ['month' => '2025-01', 'hours' => 85, 'avg_viewers' => 195, 'new_followers' => 320],
                    ['month' => '2025-02', 'hours' => 92, 'avg_viewers' => 210, 'new_followers' => 410],
                    ['month' => '2025-03', 'hours' => 78, 'avg_viewers' => 180, 'new_followers' => 285],
                    ['month' => '2025-04', 'hours' => 95, 'avg_viewers' => 220, 'new_followers' => 450],
                    ['month' => '2025-05', 'hours' => 88, 'avg_viewers' => 200, 'new_followers' => 380],
                    ['month' => '2025-06', 'hours' => 102, 'avg_viewers' => 235, 'new_followers' => 520],
                ],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }
}