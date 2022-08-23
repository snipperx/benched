<?php

namespace App\Observers;

use App\Models\Roles;
use App\Notifications\RolesCreatedEmailNotification;

class RolesCreatedObserver
{
    /**
     * Handle the Roles "created" event.
     *
     * @param  \App\Models\Roles  $roles
     * @return void
     */
    public function created(Roles $roles)
    {
        $roles->notify( new RolesCreatedEmailNotification());
    }

    /**
     * Handle the Roles "updated" event.
     *
     * @param  \App\Models\Roles  $roles
     * @return void
     */
    public function updated(Roles $roles)
    {
        //
    }

    /**
     * Handle the Roles "deleted" event.
     *
     * @param  \App\Models\Roles  $roles
     * @return void
     */
    public function deleted(Roles $roles)
    {
        //
    }

    /**
     * Handle the Roles "restored" event.
     *
     * @param  \App\Models\Roles  $roles
     * @return void
     */
    public function restored(Roles $roles)
    {
        //
    }

    /**
     * Handle the Roles "force deleted" event.
     *
     * @param  \App\Models\Roles  $roles
     * @return void
     */
    public function forceDeleted(Roles $roles)
    {
        //
    }
}
