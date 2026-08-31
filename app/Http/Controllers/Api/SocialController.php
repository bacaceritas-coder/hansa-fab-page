<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SocialController extends Controller
{
    /**
     * Get all social media links
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'platforms' => [
                    [
                        'platform' => 'twitch',
                        'name' => 'Twitch',
                        'username' => 'hansafab',
                        'url' => 'https://twitch.tv/hansafab',
                        'icon' => 'twitch',
                        'color' => '#9146FF',
                        'verified' => true,
                        'followers' => '12.5K',
                        'primary' => true,
                        'description' => 'Watch me live!',
                    ],
                    [
                        'platform' => 'youtube',
                        'name' => 'YouTube',
                        'username' => 'HansaFab',
                        'url' => 'https://youtube.com/@HansaFab',
                        'icon' => 'youtube',
                        'color' => '#FF0000',
                        'verified' => true,
                        'followers' => '8.2K',
                        'primary' => false,
                        'description' => 'Highlights & VODs',
                    ],
                    [
                        'platform' => 'twitter',
                        'name' => 'X (Twitter)',
                        'username' => 'hansafab',
                        'url' => 'https://x.com/hansafab',
                        'icon' => 'twitter',
                        'color' => '#1DA1F2',
                        'verified' => true,
                        'followers' => '5.1K',
                        'primary' => false,
                        'description' => 'Updates & announcements',
                    ],
                    [
                        'platform' => 'instagram',
                        'name' => 'Instagram',
                        'username' => 'hansafab',
                        'url' => 'https://instagram.com/hansafab',
                        'icon' => 'instagram',
                        'color' => '#E4405F',
                        'verified' => false,
                        'followers' => '3.8K',
                        'primary' => false,
                        'description' => 'Behind the scenes',
                    ],
                    [
                        'platform' => 'tiktok',
                        'name' => 'TikTok',
                        'username' => 'hansafab',
                        'url' => 'https://tiktok.com/@hansafab',
                        'icon' => 'tiktok',
                        'color' => '#000000',
                        'verified' => false,
                        'followers' => '15.2K',
                        'primary' => false,
                        'description' => 'Short clips & funny moments',
                    ],
                    [
                        'platform' => 'discord',
                        'name' => 'Discord',
                        'username' => 'Hansa Fab Community',
                        'url' => 'https://discord.gg/hansafab',
                        'icon' => 'discord',
                        'color' => '#5865F2',
                        'verified' => true,
                        'followers' => '2.1K Members',
                        'primary' => false,
                        'description' => 'Join the community!',
                    ],
                    [
                        'platform' => 'github',
                        'name' => 'GitHub',
                        'username' => 'hansafab',
                        'url' => 'https://github.com/hansafab',
                        'icon' => 'github',
                        'color' => '#181717',
                        'verified' => false,
                        'followers' => '120',
                        'primary' => false,
                        'description' => 'Open source projects & configs',
                    ],
                ],
                'linktree' => 'https://linktr.ee/hansafab',
                'business_email' => 'business@hansafab.com',
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get specific platform details
     */
    public function show(string $platform): JsonResponse
    {
        $socials = $this->index()->getData(true)['data']['platforms'];
        
        $found = collect($socials)->firstWhere('platform', strtolower($platform));
        
        if (!$found) {
            return response()->json([
                'success' => false,
                'error' => 'Platform not found',
                'available_platforms' => collect($socials)->pluck('platform')->toArray(),
            ], 404);
        }
        
        return response()->json([
            'success' => true,
            'data' => $found,
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }
}