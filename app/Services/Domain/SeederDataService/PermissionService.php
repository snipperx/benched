<?php

namespace App\Services\Domain\SeederDataService;

use App\Http\Requests\PermissionsStoreRequest;
use Spatie\Permission\Models\Permission;

class PermisionService
{
    public function store(PermissionsStoreRequest $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name'
        ]);

        Permission::create($request->only('name'));

        return redirect()->route('permissions.index')
            ->withSuccess(__('Permission created successfully.'));
    }
}
