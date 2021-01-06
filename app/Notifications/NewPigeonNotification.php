<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPigeonNotification extends Notification
{
    use Queueable;

    protected $pigeon;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($pigeon)
    {
        $this->pigeon = $pigeon;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'pigeon' => $this->pigeon
        ];
    }
}
