<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum;
    public $msg;
    public $num1;
    public $num2;
    public function addTwoNumber($num1,$num2)
    {
        $this->sum = $num1 + $num2;
    }
    public function displayMsg($msg)
    {
        $this->msg = $msg;
    }
    public function getSum()
    {
        $this->sum = $this->num1 * $this->num2;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
