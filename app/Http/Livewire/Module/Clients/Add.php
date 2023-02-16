<?php

namespace App\Http\Livewire\Module\Clients;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\ImageIntervention;
use App\Models\Clients;
use App\Services\ImageInterventionServices;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads, CheckPermission, ImageIntervention;

    public $logo;
    public $code;
    public $name;
    public $address;
    public $phone;

    protected $rules = [
        'logo' => 'required|file|mimes:jpg,png', // 1MB Max
        'code' => 'string',
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
    ];

    protected $messages = [
        //
    ];

    public function submit()
    {
        $this->validate();
        $check = $this->CheckPermission('clients-create');
        $uuid = Str::uuid();

        if ($check['status']) {
            $path = $this->createThumbnail($this->logo, $uuid, 'Clients');

            Clients::create([
                'uuid' => $uuid,
                'code' => $this->code,
                'name' => $this->name,
                'address' => $this->address,
                'phone' => $this->phone,
                'logo' => $path,
                'active' => True
            ]);

            return redirect()->route('clients:index');
        }
    }

    public function render()
    {
        return view('livewire.module.clients.add');
    }
}
