<?php
namespace App\Notifications;
use App\Contracts\NotificationChannel;
use Illuminate\Support\Facades\log;

class EmailChannel implements NotificationChannel
{
    public function send(
        string $recipient,
        string $message
    ): void {
        Log::info("Email notification ", [
        'recipient' => $recipient,
        'message' => $message
        ]);
    }
}

