<?php

namespace App\Http\Livewire\Department;

use App\Http\Livewire\Department;
use App\Models\Departament as Departamento;
use Livewire\Component;

class DeparmentIndex extends Component
{

    public $search;
    public function render()
    {
        return view('livewire.department.deparment-index', [
            'departments' => Departamento::where(
                'name',
                'LIKE',
                '%' . $this->search . '%'
            )->OrderBy('id', 'desc')->where('status', '1')->get()
        ]);
    }
}
