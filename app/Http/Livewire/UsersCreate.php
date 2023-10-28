<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function createUser()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create($validatedData);

        session()->flash('message', 'User created successfully.');

        // Reset form fields
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.users-create');
    }
}
