<?php

namespace App\Http\Livewire\Module\Projects;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\ImageIntervention;
use App\Models\Projects;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Add extends Component
{
    use WithFileUploads, CheckPermission, ImageIntervention;

    public $logo;
    public $code;
    public $name;
    public $details;

    protected $rules = [
        'logo' => 'nullable|file|mimes:jpg,png', // 1MB Max
        'code' => 'string',
        'name' => 'string',
        'details' => 'string',
    ];

    protected $messages = [
        //
    ];

    public function submit()
    {
        $this->validate();
        $check = $this->CheckPermission('projects-create');
        $uuid = Str::uuid();

        if ($check['status']) {
            $id = Projects::create([
                'uuid' => $uuid,
                'code' => $this->code,
                'name' => $this->name,
                'details' => $this->details,
                'active' => True
            ])->id;

            if ($this->logo) {
                $path = $this->createThumbnail($this->logo, $uuid, 'Project');

                Projects::find($id)->update([
                    'logo' => $path,
                ]);
            }

            return redirect()->route('projects:index');
        } else {
            $this->dispatchBrowserEvent('swal', $check['data']);
        }
    }

    public function render()
    {
        return view('livewire.module.projects.add');
    }
}
