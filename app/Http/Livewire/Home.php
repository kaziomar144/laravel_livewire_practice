<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $username;
    public function mount($name=null){
        $this->username = $name;
    }
    public function render()
    {
        return view('livewire.home');
    }
}
