<?php

namespace App\Http\Livewire\Module\Projects;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\ImageIntervention;
use App\Models\Projects;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads, CheckPermission, ImageIntervention;

    public $logo;
    public $code;
    public $name;
    public $details;
    public $uuid;
    public $project;

    protected $rules = [
        'logo' => 'nullable|file|mimes:jpg,png', // 1MB Max
        'code' => 'string',
        'name' => 'string',
        'details' => 'string',
    ];

    protected $messages = [
        //
    ];

    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $this->project = Projects::whereUuid($this->uuid)->first();
        $this->code = $this->project->code;
        $this->name = $this->project->name;
        $this->details = $this->project->details;
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $check = $this->CheckPermission('projects-update');

        if ($check['status']) {
            Projects::find($this->project->id)->update([
                'code' => $this->code,
                'name' => $this->name,
                'details' => $this->details,
            ]);

            if ($validatedData['logo']) {
                $path = $this->createThumbnail($this->logo, $this->project->uuid, 'Project');
                Projects::whereId($this->project->id)->update(['logo' => $path]);
            }

            return redirect()->route('projects:index');
        } else {
            $this->dispatchBrowserEvent('swal', $check['data']);
        }
    }

    public function render()
    {
        return view('livewire.module.projects.update',[
            'project' => $this->project,
        ]);
    }
}
