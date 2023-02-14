<?php

namespace App\Http\Livewire\Module\Projects;

use App\Models\Projects;
use App\Services\ImageInterventionServices;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $logo;
    public $code;
    public $name;
    public $details;
    public $uuid;
    public $project;
    private ImageInterventionServices $imgInterventionService;

    public function boot(ImageInterventionServices $imgInterventionService)
    {
        $this->imgInterventionService = $imgInterventionService;
    }

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

    public function render()
    {
        return view('livewire.module.projects.update',[
            'project' => $this->project,
        ]);
    }
}
