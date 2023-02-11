<?php

namespace App\Http\Livewire\Module\Clients;

use App\Models\Clients;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = Clients::all();

        return view('livewire.module.clients.index', [
            'data' => $data
        ]);
    }
}
