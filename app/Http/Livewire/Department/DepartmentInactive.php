<?php

namespace App\Http\Livewire\Department;



use App\Models\Departament as Departamento;
use Livewire\Component;

class DepartmentInactive extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.department.department-inactive', [
            'departments' => Departamento::where(
                'name',
                'LIKE',
                '%' . $this->search . '%'
            )->OrderBy('id', 'desc')->where('status', '0')->get()
        ]);
    }
}
