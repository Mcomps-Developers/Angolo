<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewClerk extends Notification
{
    use Queueable;
    public $user;
    public $password;
    /**
     * Create a new notification instance.
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
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
            ->subject('Karibu ' . env('APP_NAME'))
            ->line('Dear ' . $this->user->name . ',')
            ->line('Welcome to ' .  env('APP_NAME') . '! We are delighted to have you join our platform.')
            ->line('An account has been created for you by our admin. Your email(username) is ' . $this->user->email . ' and password is ' . $this->password)
            ->line('Do not forget to update your public profile to ensure all is set to go live on our platform and start earning.')
            ->line('As an expert, you now have access to a wide range of tools to monitize your skills and content.')
            ->line('Feel free to explore our library of courses and creator resources to enhance your design and marketing experience.')
            ->line('If you have any questions or need assistance, our support team is here to help.')
            ->line('We are excited to accompany you on your journey towards financial freedom and personal success.')
            ->action('Go to Dashboard', url('/dashboard'));
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
