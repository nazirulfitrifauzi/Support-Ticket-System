<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LaratrustSeeder::class,
        ]);

        // give user 'suadmin' -> superadministrator role
        $suadminUser = User::find(1);
        $suadminRole = Role::find(1);
        $suadminUser->attachRole($suadminRole);

        // give user 'admin' -> administrator role
        $adminUser = User::find(2);
        $adminRole = Role::find(2);
        $adminUser->attachRole($adminRole);

        // give user 'staff' -> staff role
        $staffUser = User::find(3);
        $staffRole = Role::find(3);
        $staffUser->attachRole($staffRole);

        // give user 'client' -> client role
        $clientUser = User::find(4);
        $clientRole = Role::find(4);
        $clientUser->attachRole($clientRole);
    }
}
