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
        $admin = User::factory()->create([
            'uuid' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);
    }
}
