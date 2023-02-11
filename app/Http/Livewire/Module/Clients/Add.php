<?php

namespace App\Http\Livewire\Module\Clients;

use App\Models\Clients;
use Illuminate\Support\Str;
use Livewire\Component;

class Add extends Component
{
    public $code;
    public $name;

    public function create()
    {
        Clients::create([
            'uuid' => Str::uuid(),
            'code' => $this->code,
            'name' => $this->name,
        ]);

        return redirect()->route('clients:index');
    }

    public function render()
    {
        return view('livewire.module.clients.add');
    }
}
