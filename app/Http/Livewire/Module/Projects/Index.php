<?php

namespace App\Http\Livewire\Module\Projects;

use App\Models\Projects;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['deleteConfirmed'];

    public function changeStatus($uuid)
    {
        $project = Projects::whereUuid($uuid)->first();
        ($project->active == True)
            ? Projects::find($project->id)->update(['active' => False])
            : Projects::find($project->id)->update(['active' => True]);
    }

    public function delete($uuid)
    {
        $this->dispatchBrowserEvent('swal', [
            'type' => 'confirm',
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            // data used to delete if confirmed
            'id' => Projects::whereUuid($uuid)->first()->id,
            'postEvent' => 'deleteConfirmed',
        ]);
    }

    public function deleteConfirmed($id)
    {
        Projects::find($id)->update(['active' => False]);
        Projects::find($id)->delete();

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Success!',
            'text' => 'Project delete successfully.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 2500,
        ]);
    }

    public function render()
    {
        $data = Projects::all();
        return view('livewire.module.projects.index', [
            'data' => $data,
        ]);
    }
}
