<?php

namespace App\Http\Livewire\Module\Users;

use App\Models\User;
use App\Services\ImageInterventionServices;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Add extends Component
{
    use WithFileUploads;

    public $avatar;
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation;

    private ImageInterventionServices $imgInterventionService;

    public function boot(ImageInterventionServices $imgInterventionService)
    {
        $this->imgInterventionService = $imgInterventionService;
    }

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
        $uuid = Str::uuid();

        $id = User::create([
            'uuid' => $uuid,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'active' => True
        ])->id;

        if ($this->avatar) {
            $path = $this->imgInterventionService->createThumbnail($this->avatar, $uuid, 'Users');

            User::find($id)->update([
                'avatar' => $path,
            ]);
        }

        return redirect()->route('users:index');
    }

    public function render()
    {
        return view('livewire.module.users.add');
    }
}
