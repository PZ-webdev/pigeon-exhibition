<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;

class SendNewUserNotification
{
    public function handle($event)
    {
        $admins = User::whereHas('role', function ($query) {
                $query->where('id', 1);
            })->get();

        Notification::send($admins, new NewUserNotification($event->user));
    }
}
