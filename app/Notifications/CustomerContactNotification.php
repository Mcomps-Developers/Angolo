<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomerContactNotification extends Notification
{
    use Queueable;
    public $message;
    /**
     * Create a new notification instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
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
            ->subject($this->message->subject)
            ->line('Thank you ' . $this->message->full_name . ' for contacting ' . env('APP_NAME'))
            ->line('We have received you message and we are working to respond the soonest. We will notify you once your message has been processed.')
            ->line('Service Ticket: ' . $this->message->ticket_id)
            ->line('Phone Number: ' . $this->message->phone_number)
            ->line('Email: ' . $this->message->email)
            ->line('Message Content: ' . $this->message->message)
            ->line('Powered by Mcomps | www.mcomps.co.ke');
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
