<?php

namespace App\Http\Livewire\Module\Projects;

use App\Models\Projects;
use App\Services\ImageInterventionServices;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Add extends Component
{
    use WithFileUploads;

    public $logo;
    public $code;
    public $name;
    public $details;

    private ImageInterventionServices $imgInterventionService;

    public function boot(ImageInterventionServices $imgInterventionService)
    {
        $this->imgInterventionService = $imgInterventionService;
    }

    protected $rules = [
        'logo' => 'required|file|mimes:jpg,png', // 1MB Max
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
        $uuid = Str::uuid();
        $path = $this->imgInterventionService->createThumbnail($this->logo, $uuid, 'Project');

        Projects::create([
            'uuid' => $uuid,
            'code' => $this->code,
            'name' => $this->name,
            'details' => $this->details,
            'logo' => $path,
            'active' => True
        ]);

        return redirect()->route('projects:index');
    }

    public function render()
    {
        return view('livewire.module.projects.add');
    }
}
