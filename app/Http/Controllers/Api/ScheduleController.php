<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ScheduleController extends Controller
{
    /**
     * Get full streaming schedule
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'timezone' => 'Asia/Jakarta (WIB)',
                'schedule' => [
                    [
                        'day' => 'Monday',
                        'date' => 'Senin',
                        'streams' => [
                            [
                                'title' => 'Valorant Ranked Grind',
                                'game' => 'Valorant',
                                'start_time' => '19:00',
                                'end_time' => '23:00',
                                'duration' => '4 hours',
                                'type' => 'competitive',
                                'tags' => ['ranked', 'competitive', 'tryhard'],
                            ],
                        ],
                    ],
                    [
                        'day' => 'Tuesday',
                        'date' => 'Selasa',
                        'streams' => [
                            [
                                'title' => 'New Game Tuesday',
                                'game' => 'Various',
                                'start_time' => '20:00',
                                'end_time' => '23:00',
                                'duration' => '3 hours',
                                'type' => 'variety',
                                'tags' => ['new release', 'first impressions', 'chill'],
                            ],
                        ],
                    ],
                    [
                        'day' => 'Wednesday',
                        'date' => 'Rabu',
                        'streams' => [
                            [
                                'title' => 'Elden Ring DLC / Souls-like',
                                'game' => 'Elden Ring',
                                'start_time' => '19:00',
                                'end_time' => '23:00',
                                'duration' => '4 hours',
                                'type' => 'progression',
                                'tags' => ['boss runs', 'lore', 'co-op'],
                            ],
                        ],
                    ],
                    [
                        'day' => 'Thursday',
                        'date' => 'Kamis',
                        'streams' => [
                            [
                                'title' => 'Community Game Night',
                                'game' => 'Jackbox / Party Games',
                                'start_time' => '20:00',
                                'end_time' => '22:30',
                                'duration' => '2.5 hours',
                                'type' => 'community',
                                'tags' => ['viewer games', 'fun', 'interactive'],
                            ],
                        ],
                    ],
                    [
                        'day' => 'Friday',
                        'date' => 'Jumat',
                        'streams' => [
                            [
                                'title' => 'Friday Night FPS',
                                'game' => 'Valorant / CS2 / Apex',
                                'start_time' => '20:00',
                                'end_time' => '01:00',
                                'duration' => '5 hours',
                                'type' => 'competitive',
                                'tags' => ['late night', 'ranked', 'duo/trio'],
                            ],
                        ],
                    ],
                    [
                        'day' => 'Saturday',
                        'date' => 'Sabtu',
                        'streams' => [
                            [
                                'title' => 'Weekend Long Stream',
                                'game' => 'Minecraft / RPG',
                                'start_time' => '14:00',
                                'end_time' => '20:00',
                                'duration' => '6 hours',
                                'type' => 'long stream',
                                'tags' => ['building', 'exploration', 'milestone'],
                            ],
                        ],
                    ],
                    [
                        'day' => 'Sunday',
                        'date' => 'Minggu',
                        'streams' => [
                            [
                                'title' => 'Chill Sunday / Just Chatting',
                                'game' => 'Just Chatting',
                                'start_time' => '16:00',
                                'end_time' => '19:00',
                                'duration' => '3 hours',
                                'type' => 'chill',
                                'tags' => ['Q&A', 'life update', 'relaxed'],
                            ],
                        ],
                    ],
                ],
                'notes' => 'Schedule may change. Follow social media for real-time updates!',
                'special_events' => [
                    [
                        'title' => 'Subathon Anniversary',
                        'date' => '2025-07-15',
                        'description' => '2 Year Streaming Anniversary Celebration!',
                    ],
                    [
                        'title' => 'Charity Stream',
                        'date' => '2025-12-20',
                        'description' => 'Annual Charity Stream for Indonesian Children\'s Foundation',
                    ],
                ],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get upcoming streams
     */
    public function upcoming(): JsonResponse
    {
        $now = now('Asia/Jakarta');
        $dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $todayIndex = $now->dayOfWeek;
        
        $upcoming = [];
        for ($i = 0; $i < 7; $i++) {
            $dayIndex = ($todayIndex + $i) % 7;
            $dayName = $dayNames[$dayIndex];
            $date = $now->copy()->addDays($i)->format('Y-m-d');
            
            $daySchedule = $this->getDaySchedule($dayName);
            if (!empty($daySchedule)) {
                foreach ($daySchedule as $stream) {
                    $streamTime = $now->copy()->addDays($i)->setTimeFromTimeString($stream['start_time']);
                    $upcoming[] = array_merge($stream, [
                        'day' => $dayName,
                        'date' => $date,
                        'timestamp' => $streamTime->toISOString(),
                        'is_today' => $i === 0,
                        'is_tomorrow' => $i === 1,
                    ]);
                }
            }
        }
        
        return response()->json([
            'success' => true,
            'data' => [
                'upcoming' => array_slice($upcoming, 0, 10),
                'next_stream' => !empty($upcoming) ? $upcoming[0] : null,
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    /**
     * Get past streams
     */
    public function past(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'recent_streams' => [
                    [
                        'title' => 'Elden Ring: Shadow of the Erdtree - Final Boss',
                        'game' => 'Elden Ring',
                        'date' => '2025-06-15',
                        'duration' => '4h 32m',
                        'peak_viewers' => 890,
                        'avg_viewers' => 420,
                        'thumbnail' => asset('images/thumbnails/eldring-final.jpg'),
                        'vod_url' => 'https://twitch.tv/videos/123456789',
                    ],
                    [
                        'title' => 'Valorant Ranked: Radiant Push!',
                        'game' => 'Valorant',
                        'date' => '2025-06-12',
                        'duration' => '5h 15m',
                        'peak_viewers' => 1240,
                        'avg_viewers' => 580,
                        'thumbnail' => asset('images/thumbnails/valorant-radiant.jpg'),
                        'vod_url' => 'https://twitch.tv/videos/123456788',
                    ],
                    [
                        'title' => 'Minecraft Hardcore: 100 Days!',
                        'game' => 'Minecraft',
                        'date' => '2025-06-08',
                        'duration' => '7h 45m',
                        'peak_viewers' => 650,
                        'avg_viewers' => 310,
                        'thumbnail' => asset('images/thumbnails/mc-100days.jpg'),
                        'vod_url' => 'https://twitch.tv/videos/123456787',
                    ],
                ],
            ],
            'meta' => [
                'api_version' => 'v1',
                'timestamp' => now()->toISOString(),
            ]
        ]);
    }

    private function getDaySchedule(string $day): array
    {
        $fullSchedule = $this->index()->getData(true)['data']['schedule'];
        foreach ($fullSchedule as $dayData) {
            if ($dayData['day'] === $day) {
                return $dayData['streams'];
            }
        }
        return [];
    }
}