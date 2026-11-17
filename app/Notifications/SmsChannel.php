<?php
namespace App\Notifications;
use
App\Contracts\NotificationChannel;
use Illuminate\Support\Facades\log;
class SmsChannel implements NotificationChannel
{
    public function send(
        string $recipient,
        string $message
    ): void {
        Log::info("SMS notification ", [
        'recipient' => $recipient,
        'message' => $message
        ]);
    }
}