<?php

namespace App\Factories;

use App\Contracts\NotificationChannel;
use App\Notifications\EmailChannel;
use App\Notifications\SmsChannel;
use InvalidArgumentException;

class NotificationFactory
{
    public function create(string $channel): NotificationChannel
    {
        return match ($channel) {
            'email' => app(EmailChannel::class),
            'sms' => app(SmsChannel::class),
            default => throw new InvalidArgumentException("Invalid notification channel: $channel"),
        };
    }
}
