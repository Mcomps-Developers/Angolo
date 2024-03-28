<div class="iq-sub-dropdown">
    @if (Route::has('login'))
        @auth
            <div class="m-0 shadow-none iq-card">
                <div class="p-0 iq-card-body">
                    <div class="p-3 bg-primary">
                        <h5 class="mb-0 text-white">All Notifications<small
                                class="float-right pt-1 badge badge-light">{{ $notifications->count() }}</small></h5>
                    </div>
                    @if ($notifications->count() > 0)
                        @foreach ($notifications as $notification)
                            <a href="#!" class="iq-sub-card"
                                wire:click="markNotificationAsRead('{{ $notification->id }}')">
                                <div class="media align-items-center">
                                    <div class="">
                                        <i class="ri-notification-2-line"></i>
                                    </div>
                                    <div class="ml-3 media-body">
                                        <h6 class="mb-0 ">{{ $notification->data['title'] }}</h6>
                                        <small
                                            class="float-right font-size-12">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</small>
                                        <p class="mb-0">{{ $notification->data['message'] }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        @endauth
    @endif
</div>
