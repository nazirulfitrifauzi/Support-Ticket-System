<?php

namespace App\Http\Livewire\Module\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = User::all();

        return view('livewire.module.users.index', [
            'data' => $data,
        ]);
    }
}
