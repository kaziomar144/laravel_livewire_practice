<?php

namespace App\Http\Livewire;

use App\Models\User as Users;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    // public $users;
    use WithPagination;
    public function render()
    {
        $users = Users::paginate(5);
        return view('livewire.user',compact('users'));
    }
}
