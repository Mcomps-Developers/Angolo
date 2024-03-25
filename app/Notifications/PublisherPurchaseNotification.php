<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PublisherPurchaseNotification extends Notification
{
    use Queueable;
    public $publisher;
    public $purchase;
    public $publisherWallet;
    public $amountToAdd;
    public $price;
    /**
     * Create a new notification instance.
     */
    public function __construct($publisher, $purchase, $publisherWallet, $amountToAdd, $price)
    {
        $this->publisher = $publisher;
        $this->purchase = $purchase;
        $this->publisherWallet = $publisherWallet;
        $this->amountToAdd = $amountToAdd;
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
            ->subject('New Sale ' . $this->purchase->reference)
            ->line('You have received Ksh ' . $this->amountToAdd . '.00 from the sale of ' . $this->purchase->content->title . '.')
            ->line(env('APP_NAME') . ' charged you a comission of ' . env('COMMISSION') . '% on the total sales valued at Ksh ' . $this->price . '.00')
            ->line('You can withdraw your funds to mobile or bank by placing a withdrawal request. Login to withdraw.')
            ->action('Withdraw Funds', url('/dashboard'))
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
            'title'   => 'New Sale Ksh ' . $this->amountToAdd,
            'message' => 'We sold content for you',
            'identity' => 'publisher_sale',
        ];
    }
}
