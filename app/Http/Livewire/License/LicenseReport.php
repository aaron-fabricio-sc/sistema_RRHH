<?php

namespace App\Http\Livewire\License;

use Livewire\Component;
use App\Models\Employee;

class LicenseReport extends Component
{
    public $search;


    public function render()
    {

        $vacio = "Digite su número de documento.";
        $employees = "";
        if (!$this->search) {
            return view('livewire.license.license-report', compact("vacio", "employees"));
        } else {
            $employees = Employee::where(
                'document_number',
                $this->search
            )->OrderBy('id', 'desc')->where('status', '1')->get();

            //return $employees;
            return view('livewire.license.license-report', compact("employees"));
        }
    }
}
