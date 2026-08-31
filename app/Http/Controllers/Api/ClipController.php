<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ClipController extends Controller
{
    /**
     * Get all clips
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'clips' => [
                    [
                        'id' => 'clip_001',
                        'title' => 'INSANE 1v5 CLUTCH IN RADIANT LOBBY',
                        'game' => 'Valorant',
                        'duration' => '45s',
                        'views' => 125000,
                        'created_at' => '2025-06-15T20:30:00Z',
                        'thumbnail' => asset('images/clips/valorant-1v5.jpg'),
                        'url' => 'https://clips.twitch.tv/hansafab/1v5-clutch',
                        'tags' => ['clutch', 'radiant', 'ace', 'highlight'],
                        'featured' => true,
                    ],
                    [
                        'id' => 'clip_002',
                        'title' => 'First Time Beating Malenia - PURE REACTION',
                        'game' => 'Elden Ring',
                        'duration' => '2m 15s',
                        'views' => 89000,
                        'created_at' => '2025-06-10T19:45:00Z',
                        'thumbnail' => asset('images/clips/elden-malenia.jpg'),
                        'url' => 'https://clips.twitch.tv/hansafab/malenia-win',
                        'tags' => ['boss', 'reaction', 'victory', 'souls'],
                        'featured' => true,
                    ],
                    [
                        'id' => 'clip_003',
                        'title' => 'Minecraft Hardcore Death - 98 Days Gone',
                        'game' => 'Minecraft',
                        'duration' => '1m 30s',
                        'views' => 67000,
                        'created_at' => '2025-06-05T22:10:00Z',
                        'thumbnail' => asset('images/clips/mc-death.jpg'),
                        'url' => 'https://clips.twitch.tv/hansafab/hc-death',
                        'tags' => ['hardcore', 'death', 'heartbreak', '98days'],
                        'featured' => true,
                    ],
                    [
                        'id' => 'clip_004',
                        'title' => 'Funny Moment: Chat Made Me Jump Scare Myself',
                        'game' => 'Phasmophobia',
                        'duration' => '35s',
                        'views' => 45000,
                        'created_at' => '2025-06-01T21:00:00Z',
                        'thumbnail' => asset('images/clips/phasmo-jumpscare.jpg'),
                        'url' => 'https://clips.twitch.tv/hansafab/jumpscare',
                        'tags' => ['funny', 'horror', 'chat', 'jumpscare'],
                        'featured' => false,
                    ],
                    [
                        'id' => 'clip_005',
                        'title' => 'Perfect Headshot Crossmap - Lucky or Skill?',
                        'game' => 'Valorant',
                        'duration' => '20s',
                        'views' => 38000,
                        'created_at' => '2025-05-28T18:20:00Z',
                        'thumbnail' => asset('images/clips/valorant-crossmap.jpg'),
                        'url' => 'https://clips.twitch.tv/hansafab/crossmap',
                        'tags' => ['lucky', 'headshot', 'crossmap', 'disbelief'],
                        'featured' => false,
                    ],
                    [
                        'id' => 'clip_006',
                        'title' => 'Community Game Night: Jackbox Fails',
                        'game' => 'Jackbox Party Pack',
                        'duration' => '1m 10s',
                        'views' => 28000,
                        'created_at' => '2025-05-22T20:30:00Z',
                        'thumbnail' => asset('images/clips/jackbox-fails.jpg'),
                        'url' => 'https://clips.twitch.tv/hansafab/jackbox',
                        'tags' => ['community', 'funny', 'jackbox', 'viewers'],
                        'featured' => false,
                    ],
                ],
                'total' => 89,
                'categories' => ['Valorant', 'Elden Ring', 'Minecraft', 'Phasmophobia', 'Jackbox', 'Just Chatting', 'Cyberpunk 2077', 'Baldur\'s Gate 3'],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get featured clips
     */
    public function featured(): JsonResponse
    {
        $allClips = $this->index()->getData(true)['data']['clips'];
        $featured = collect($allClips)->where('featured', true)->values()->toArray();
        
        return response()->json([
            'success' => true,
            'data' => [
                'clips' => $featured,
                'total_featured' => count($featured),
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }
}