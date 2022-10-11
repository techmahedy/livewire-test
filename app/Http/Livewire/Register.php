<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{   
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    
    /**Realtime validation for email*/
    public function updatedEmail(){
        $this->validate(['email' => 'unique:users']);
    }

    public function register()
    {   
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:password_confirmation'
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
