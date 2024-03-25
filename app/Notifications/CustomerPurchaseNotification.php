<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomerPurchaseNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    public $user;
    public $purchase;
    public $price;
    public function __construct($user, $purchase, $price)
    {
        $this->user = $user;
        $this->purchase = $purchase;
        $this->price = $price;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Purchase Receipt')
            ->line('Your purchase of ' . $this->purchase->content->title . ' at Ksh ' . $this->price . '.00 VAT inclusive was successful.')
            ->line('This email serves as a receipt. The content is attached to the email.')
            ->attach(env('APP_URL').'/files/' . $this->purchase->content->attachment)
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
            'title'   => 'Purchase of Ksh ' . $this->price,
            'message' => 'You bought ' . $this->purchase->content->title,
            'identity' => 'content_purchase',
        ];
    }
}
