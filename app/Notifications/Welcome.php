<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Welcome extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Welcome to ' . env('APP_NAME'))
        ->line('Dear ' . $this->user->name . ',')
        ->line('Welcome to ' .  env('APP_NAME') . '! We are delighted to have you join our platform.')
        ->line('You now have access to a wide range of educational content tailored to your needs.')
        ->line('Feel free to explore our library of courses and resources to enhance your learning experience.')
        ->line('If you have any questions or need assistance, our support team is here to help.')
        ->line('We are excited to accompany you on your journey towards academic success.')
        ->action('Start Learning', url('/dashboard'));
    
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
