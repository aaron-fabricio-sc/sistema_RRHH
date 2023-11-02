<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User as usuario;

class UserIndex extends Component
{
    public $search;
    public function render()
    {



        $users = usuario::where(
            'name',
            'LIKE',
            '%' . $this->search . '%'
        )->orWhere(
            'email',
            'LIKE',
            '%' . $this->search . '%'
        )->OrderBy('id', 'desc')->with("roles")->get();


        return view('livewire.user.user-index', compact('users'));
    }
}
