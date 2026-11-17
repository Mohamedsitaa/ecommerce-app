<?php

namespace App\Services;

use App\Factories\NotificationFactory;

class OrderRegistrationService
{
    public function __construct(
        private NotificationFactory $factory
    ) {
    }

    public function registerOrder(
        string $recipient,
        string $message,
        string $channel
    ): void {
        $notificationChannel = $this->factory->create($channel);
        $notificationChannel->send($recipient, $message);
    }
}
