<?php

namespace App\Listeners;

use App\Notifications\RolesCreatedEmailNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Roles;

class   CreateRoleListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($roles)
    {
        $this->roles = $roles;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle( Registered $event)
    {
        $event->user->notify(new RolesCreatedEmailNotification());
    }
}
