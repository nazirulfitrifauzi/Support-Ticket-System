<?php

namespace App\Http\Livewire\Module\Users;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\ImageIntervention;
use App\Models\User;
use App\Services\ImageInterventionServices;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads, CheckPermission, ImageIntervention;

    public $uuid;
    public $user;
    public $avatar;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;

    protected $rules = [
        'avatar' => 'nullable|file|mimes:jpg,png', // 1MB Max
        'name' => 'required|min:3',
        'email' => 'required|email:rfc,dns|unique:users',
        'password' => 'required|min:6|same:passwordConfirmation'
    ];

    protected $messages = [
        //
    ];

    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $this->user = User::whereUuid($this->uuid)->first();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->avatar = $this->user->avatar;
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $check = $this->CheckPermission('users-update');

        if ($check['status']) {
            User::find($this->user->id)->update([
                'name' => $this->name,
                'email' => $this->email,
                'avatar' => $this->avatar,
            ]);

            if ($validatedData['avatar']) {
                $path = $this->createThumbnail($this->avatar, $this->user->uuid, 'Users');
                User::whereId($this->user->id)->update(['avatar' => $path]);
            }

            return redirect()->route('users:index');
        } else {
            $this->dispatchBrowserEvent('swal', $check['data']);
        }
    }

    public function render()
    {
        return view('livewire.module.users.update');
    }
}
