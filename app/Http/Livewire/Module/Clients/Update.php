<?php

namespace App\Http\Livewire\Module\Clients;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\ImageIntervention;
use App\Models\Clients;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads, CheckPermission, ImageIntervention;

    public $logo;
    public $code;
    public $name;
    public $address;
    public $phone;
    public $uuid;
    public $client;

    protected $rules = [
        'logo' => 'nullable|file|mimes:jpg,png', // 1MB Max
        'code' => 'string',
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
    ];

    protected $messages = [
        //
    ];

    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $this->client = Clients::whereUuid($this->uuid)->first();
        $this->code = $this->client->code;
        $this->name = $this->client->name;
        $this->address = $this->client->address;
        $this->phone = $this->client->phone;
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $check = $this->CheckPermission('clients-update');

        if ($check['status']) {
            Clients::find($this->client->id)->update([
                'code' => $this->code,
                'name' => $this->name,
                'address' => $this->address,
                'phone' => $this->phone,
            ]);

            if ($validatedData['logo']) {
                $path = $this->createThumbnail($this->logo, $this->client->uuid, 'Clients');
                Clients::whereId($this->client->id)->update([ 'logo' => $path ]);
            }

            return redirect()->route('clients:index');
        }
    }

    public function render()
    {
        return view('livewire.module.clients.update', [
            'client' => $this->client,
        ]);
    }
}
