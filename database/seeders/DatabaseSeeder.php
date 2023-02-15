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

        // give user 'admin' -> administrator role
        $adminUser = User::find(1);
        $adminRole = Role::find(2);
        $adminUser->attachRole($adminRole);
    }
}
