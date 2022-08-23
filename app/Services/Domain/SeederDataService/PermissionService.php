<?php

namespace App\Services\Domain\SeederDataService;

use App\Http\Requests\PermissionsStoreRequest;
use Spatie\Permission\Models\Permission;

class PermissionService
{
    public function store()
    {
        $permissionsArr = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete'
        ];

        foreach($permissionsArr as $permissions)
        {
            Permission::create(['name' => $permissions ]);
        }
    }
}
