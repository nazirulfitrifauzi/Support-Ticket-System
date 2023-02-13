<?php

namespace App\Http\Livewire\Module\Clients;

use App\Models\Clients;
use Livewire\Component;

class Index extends Component
{
    public $client;
    protected $listeners = ['deleteConfirmed'];

    public function deleteConfirmed($id) {
        Clients::find($id)->update(['active' => False]);
        Clients::find($id)->delete();

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Success!',
            'text' => 'Client delete successfully.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 2500,
        ]);
    }

    public function changeStatus($uuid)
    {
        $client = Clients::whereUuid($uuid)->first();
        ($client->active == True)
            ? Clients::find($client->id)->update(['active' => False])
            : Clients::find($client->id)->update(['active' => True]);
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
            'id' => Clients::whereUuid($uuid)->first()->id,
            'postEvent' => 'deleteConfirmed',
        ]);
    }

    public function render()
    {
        $data = Clients::all();

        return view('livewire.module.clients.index', [
            'data' => $data
        ]);
    }
}
