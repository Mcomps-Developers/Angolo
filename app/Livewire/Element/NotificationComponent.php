<?php

namespace App\Livewire\Element;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class NotificationComponent extends Component
{


    public function render()
    { $user = auth()->user();
        if ($user) {
            $notifications = $user->notifications;
        } else {
            $notifications = 0;
        }

        return view('livewire.element.notification-component', ['notifications' => $notifications]);
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
