<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::factory()->create([
            'uuid' => Str::uuid(),
            'name' => 'Super Admin',
            'email' => 'suadmin@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $admin = User::factory()->create([
            'uuid' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $staff = User::factory()->create([
            'uuid' => Str::uuid(),
            'name' => 'Staff',
            'email' => 'staff@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $client = User::factory()->create([
            'uuid' => Str::uuid(),
            'name' => 'Client',
            'email' => 'client@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);
    }
}
