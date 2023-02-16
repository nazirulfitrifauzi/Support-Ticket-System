<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function attachRole()
    {
        $adminUser = User::find(1);
        $adminRole = Role::find(2);
        $adminUser->attachRole($adminRole);

        $staffUser = User::find(2);
        $staffRole = Role::find(3);
        $staffUser->attachRole($staffRole);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
