<?php

namespace App\Http\Livewire\Module\Clients;

use App\Models\Clients;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['deleteConfirmed'];

    private function queryId($id) { $query = Clients::query()->whereId($id); return $query; }
    private function queryUuid($uuid) { $query = Clients::query()->whereUuid($uuid); return $query; }

    public function deleteConfirmed($id) {
        $this->queryId($id)->update(['active' => False]);
        $this->queryId($id)->delete();

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
        ($this->queryUuid($uuid)->first()->active == True)
            ? $this->queryUuid($uuid)->update(['active' => False])
            : $this->queryUuid($uuid)->update(['active' => True]);
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
            'id' => $this->queryUuid($uuid)->first()->id,
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
