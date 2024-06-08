<?php

namespace App\Http\Livewire\Attendance;

use Livewire\Component;
use App\Models\Employee;

class AttendanceReport extends Component
{
    public $search;


    public function render()
    {

        $vacio = "Digite su número de documento.";
        $employees = "";
        if (!$this->search) {
            return view('livewire.attendance.attendance-report', compact("vacio", "employees"));
        } else {
            $employees = Employee::where(
                'document_number',
                $this->search
            )->OrderBy('id', 'desc')->where('status', '1')->get();

            return view('livewire.attendance.attendance-report', compact("employees"));
        }
    }
}
