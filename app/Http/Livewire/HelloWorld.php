<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{   
    public $name = "mahedi";
    public $loud = false;
    public $greeting = "Hello";
    
    public function resetName($name = 'chico')
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
