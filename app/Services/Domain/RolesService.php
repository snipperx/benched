<?php

namespace App\Services\Domain;

use App\Notifications\RolesCreatedEmailNotification;
use App\Notifications\WelcomeEmailNotification;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;

//use Illuminate\Notifications\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Notification;


class RolesService
{
    /**
     * @param string $name
     * @param array $permission
     * @return Role
     */
    public function storeRoles(
        string $name,
        array  $permission
    ): Role
    {
        $role = Role::create([
            'name' => $name
        ]);

        $roleData = [
            'name' => $name,
        ];

//        Notification::send($role, new RolesCreatedEmailNotification($roleData));

//        send emails when ever a role has been added

        $role->syncPermissions($permission);

        return $role;
    }

}
