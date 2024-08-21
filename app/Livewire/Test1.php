<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;


class Test1 extends Component
{
    public $users;
    #[Rule('required|min:3')]
    public $name;
    #[Rule('required|email|min:3')]
    public $email;
    public function mount()
    {
        $this->users = User::all();
    }
    public function createNewUser()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => Hash::make('password123')
        ]);
        // Refresh the users list after creating a new user
        $this->users = User::all();

        // Optionally, reset the input fields after submission
        $this->reset(['name', 'email']);
    }
    public function render()
    {
        return view('livewire.test1');
    }
}
