<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ChatController extends Controller
{
    /**
     * Get chat rules
     */
    public function rules(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'rules' => [
                    [
                        'number' => 1,
                        'title' => 'Be Respectful',
                        'description' => 'Treat everyone with kindness. No harassment, hate speech, or discrimination of any kind.',
                        'icon' => 'heart',
                    ],
                    [
                        'number' => 2,
                        'title' => 'No Spam or Self-Promo',
                        'description' => 'Don\'t spam messages, emotes, or links. No self-promotion without permission.',
                        'icon' => 'shield',
                    ],
                    [
                        'number' => 3,
                        'title' => 'English & Indonesian Only',
                        'description' => 'Keep chat in English or Indonesian so everyone can understand and moderate effectively.',
                        'icon' => 'globe',
                    ],
                    [
                        'number' => 4,
                        'title' => 'No Backseat Gaming',
                        'description' => 'Unless I ask for help, please don\'t tell me how to play. Let me experience the game!',
                        'icon' => 'controller',
                    ],
                    [
                        'number' => 5,
                        'title' => 'No Spoilers',
                        'description' => 'Absolutely no story, puzzle, or secret spoilers. This includes "hints" that give things away.',
                        'icon' => 'eye-off',
                    ],
                    [
                        'number' => 6,
                        'title' => 'Respect the Mods',
                        'description' => 'Moderators have final say. If you disagree with a decision, DM me after stream.',
                        'icon' => 'gavel',
                    ],
                    [
                        'number' => 7,
                        'title' => 'Keep It PG-13',
                        'description' => 'No explicit sexual content, excessive violence, or overly mature topics.',
                        'icon' => 'user-check',
                    ],
                    [
                        'number' => 8,
                        'title' => 'Have Fun!',
                        'description' => 'This is a community for enjoyment. Chill, chat, and enjoy the stream together!',
                        'icon' => 'sparkles',
                    ],
                ],
                'moderation' => [
                    'timeout_duration' => '5 minutes',
                    'ban_appeal_email' => 'appeals@hansafab.com',
                    'auto_mod_level' => 2,
                    'blocked_terms' => ['slurs', 'excessive_caps', 'links', 'spam_patterns'],
                ],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get channel emotes
     */
    public function emotes(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'tier_1' => [
                    ['name' => 'hansaHype', 'code' => 'hansaHype', 'description' => 'Hype moment!'],
                    ['name' => 'hansaPog', 'code' => 'hansaPog', 'description' => 'PogChamp equivalent'],
                    ['name' => 'hansaLaugh', 'code' => 'hansaLaugh', 'description' => 'Laughing hard'],
                    ['name' => 'hansaCry', 'code' => 'hansaCry', 'description' => 'Sad/cries'],
                    ['name' => 'hansaLove', 'code' => 'hansaLove', 'description' => 'Love/heart'],
                    ['name' => 'hansaClap', 'code' => 'hansaClap', 'description' => 'Clapping'],
                ],
                'tier_2' => [
                    ['name' => 'hansaWizard', 'code' => 'hansaWizard', 'description' => 'Magic/skill play'],
                    ['name' => 'hansaRage', 'code' => 'hansaRage', 'description' => 'Rage/funny anger'],
                    ['name' => 'hansaSleep', 'code' => 'hansaSleep', 'description' => 'Boring/sleepy'],
                    ['name' => 'hansaDance', 'code' => 'hansaDance', 'description' => 'Dance party'],
                ],
                'tier_3' => [
                    ['name' => 'hansaGod', 'code' => 'hansaGod', 'description' => 'God-tier play'],
                    ['name' => 'hansaKing', 'code' => 'hansaKing', 'description' => 'King of the stream'],
                    ['name' => 'hansaLegend', 'code' => 'hansaLegend', 'description' => 'Legendary moment'],
                ],
                'bit_emotes' => [
                    ['name' => 'hansaBit100', 'code' => 'hansaBit100', 'min_bits' => 100],
                    ['name' => 'hansaBit500', 'code' => 'hansaBit500', 'min_bits' => 500],
                    ['name' => 'hansaBit1000', 'code' => 'hansaBit1000', 'min_bits' => 1000],
                    ['name' => 'hansaBit5000', 'code' => 'hansaBit5000', 'min_bits' => 5000],
                ],
                'follower_emotes' => [
                    ['name' => 'hansaFollow', 'code' => 'hansaFollow', 'description' => 'New follower!'],
                ],
                'subscriber_emotes' => [
                    ['name' => 'hansaSub', 'code' => 'hansaSub', 'description' => 'Subscriber badge'],
                    ['name' => 'hansaSub6', 'code' => 'hansaSub6', 'description' => '6 month sub'],
                    ['name' => 'hansaSub12', 'code' => 'hansaSub12', 'description' => '12 month sub'],
                ],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }
}