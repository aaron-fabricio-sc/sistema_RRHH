<?php

namespace App\Http\Livewire\Attendance;

use Livewire\Component;
use App\Models\Employee;

class AttendanceCreate extends Component
{
    public $search;


    public function render()
    {

        $vacio = "Digite su número de documento.";
        $employees = "";
        if (!$this->search) {
            return view('livewire.attendance.attendance-create', compact("vacio", "employees"));
        } else {
            $employees = Employee::where(
                'document_number',
                $this->search
            )->OrderBy('id', 'desc')->where('status', '1')->get();

            return view('livewire.attendance.attendance-create', compact("employees"));
        }
    }
}
