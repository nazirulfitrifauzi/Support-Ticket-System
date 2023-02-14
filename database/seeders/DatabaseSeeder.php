<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'uuid' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@csc.net.my',
            'password' => Hash::make('secret'),
        ]);
    }
}
