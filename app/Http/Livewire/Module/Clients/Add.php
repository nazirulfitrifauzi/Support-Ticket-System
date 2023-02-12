<?php

namespace App\Http\Livewire\Module\Clients;

use App\Models\Clients;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $logo;
    public $code;
    public $name;
    public $address;
    public $contact_no;

    public function submit()
    {
        $this->validate([
            'logo' => 'file|mimes:jpg,png', // 1MB Max
            'code' => 'string',
            'name' => 'string',
            'address' => 'string',
            'contact_no' => 'string',
        ]);

        // original name
        $oriName = $this->logo->getClientOriginalName();
        // save original logo
        $oriImg = Image::make($this->logo)->stream();
        $oriPath = 'logo/' . $oriName;
        Storage::put('public/' . $oriPath, $oriImg);
        // save thumbnail
        $thumbImg = Image::make($this->logo)->resize(150,150)->stream();
        $thumbPath = 'thumbnail/' . $oriName;
        Storage::put('public/'. $thumbPath, $thumbImg);

        Clients::create([
            'uuid' => Str::uuid(),
            'code' => $this->code,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->contact_no,
            'logo' => $thumbPath,
            'active' => 1
        ]);

        return redirect()->route('clients:index');
    }

    public function render()
    {
        return view('livewire.module.clients.add');
    }
}
