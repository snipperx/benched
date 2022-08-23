<?php

namespace App\Services\Domain\SeederDataService;

use Spatie\Permission\Models\Role;

class RoleService
{

    private function store()
    {
        $role = Role::create(['name' => 'Administrator']);
        $role->syncPermissions([1,2,3,4]);

        $guestRole = Role::create(['name' => 'Guest']);
        $guestRole->syncPermissions([1]);
    }

}
