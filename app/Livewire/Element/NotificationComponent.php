<?php

namespace App\Livewire\Element;

use Livewire\Component;

class NotificationComponent extends Component
{
    public function render()
    {
        $user = auth()->user();
        $notifications = $user->notifications;
        return view('livewire.element.notification-component',['notifications'=>$notifications]);
    }

    public function markNotificationAsRead($notificationId)
    {
        auth()->user()->notifications()->where('id', $notificationId)->update(['read_at' => now()]);
    }
    public function markAllNotificationsAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
    public function deleteNotification($notificationId)
    {
        auth()->user()->notifications()->where('id', $notificationId)->delete();
    }
}
