<?php

namespace App\Services\Domain;

use App\Http\Requests\PermissionsStoreRequest;
use Spatie\Permission\Models\Permission;

class PermissionService
{
    public function store(PermissionsStoreRequest $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name'
        ]);

        Permission::create($request->only('name'));

    }
}
