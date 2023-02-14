<?php

namespace App\Http\Livewire\Module\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['deleteConfirmed'];

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
            'id' => User::whereUuid($uuid)->first()->id,
            'postEvent' => 'deleteConfirmed',
        ]);
    }

    public function deleteConfirmed($id)
    {
        User::find($id)->update(['active' => False]);
        User::find($id)->delete();

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Success!',
            'text' => 'Client delete successfully.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 2500,
        ]);
    }

    public function render()
    {
        $data = User::all();

        return view('livewire.module.users.index', [
            'data' => $data,
        ]);
    }
}
