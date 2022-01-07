<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
    public $name;
    public $info = [];

    public function mount()
    {
        $this->info[] = "Application is mounting....";
    }

    public function hydrate()
    {
        $this->info[]= 'Application is hydrating.....';
    }
    public function updating($name,$value)
    {
        $this->info[]= 'Application is updating.....';
    }
    public function updated($name,$value)
    {
        $this->info[]= 'Application is updated.....';
    }
    public function updatingName()
    {
        $this->info[]= 'Application is updating name Property.....';
    }
    public function updatedName()
    {
        $this->info[]= 'Application is updated name Property.....';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
