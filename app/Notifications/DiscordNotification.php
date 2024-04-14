<?php

namespace App\Notifications;

use App\Models\DiscordChannel;
use Illuminate\Support\Facades\Http;

class DiscordNotification
{
    public static function send($channel_id, $title = '', $description = '', $color = null, $fields = [])
    {
        $contents = [
            'embeds' => [[
                'title' => $title,
                'color' => $color,
                'description' => $description,
                'fields' => $fields,
            ]],
        ];

        $response = Http::accept('application/json')
            ->withHeaders(['Authorization' => config('app.discord_bot_token')])
            ->post('https://discord.com/api/channels/' . $channel_id . '/messages', $contents);
    }
}
