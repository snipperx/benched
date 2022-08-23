<?php

namespace Database\Seeders;

use App\Models\User;
use App\Services\Domain\SeederDataService\PermissionService;
use App\Services\Domain\SeederDataService\RoleService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissionService = new PermissionService();
        $permissionService->store();

        //        create roles
        $rolesService = new RoleService();
        $rolesService->store();

        // Let's clear the users table first
//        User::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and
        // let's hash it before the loop, or else our seeder
        // will be too slow.
        $password = Hash::make('guestpassword!');

        $userAdmin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@benched.io',
            'password' => Hash::make('tempassword!'),
            'uuid' =>   Uuid::uuid4(),
        ]);

        $userAdmin->assignRole('Administrator');

        $userGusest = User::create([
            'name' => 'Guest User',
            'email' => 'user@benched.io',
            'password' => Hash::make('guestpassword!'),
            'uuid' =>   Uuid::uuid4(),
        ]);

        $userGusest->assignRole('Guest');

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 5; $i++) {
          $users = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'uuid' =>   Uuid::uuid4(),
            ]);

            $users->assignRole('Guest');
        }

    }
}
