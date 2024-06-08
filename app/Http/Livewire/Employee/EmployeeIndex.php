<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class EmployeeIndex extends Component
{

    public $search;
    public function render()
    {

        $employees = Employee::where(
            'name',
            'LIKE',
            '%' . $this->search . '%'
        )->OrderBy('id', 'desc')->where("status", 1)->get();

        return view('livewire.employee.employee-index', compact("employees"));
    }
}
