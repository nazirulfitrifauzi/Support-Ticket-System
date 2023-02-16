<?php

namespace App\Http\Livewire\Module\Users;

use App\Http\Traits\CheckPermission;
use App\Http\Traits\ImageIntervention;
use App\Models\User;
use App\Services\ImageInterventionServices;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Add extends Component
{
    use WithFileUploads, CheckPermission, ImageIntervention;

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

    public function submit()
    {
        $this->validate();
        $check = $this->CheckPermission('users-create');
        $uuid = Str::uuid();

        if ($check['status']) {
            $id = User::create([
                'uuid' => $uuid,
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'active' => True
            ])->id;

            if ($this->avatar) {
                $path = $this->createThumbnail($this->avatar, $uuid, 'Users');

                User::find($id)->update([
                    'avatar' => $path,
                ]);
            }

            return redirect()->route('users:index');
        } else {
            $this->dispatchBrowserEvent('swal', $check['data']);
        }
    }

    public function render()
    {
        return view('livewire.module.users.add');
    }
}
