<?php

namespace App\Http\Livewire\Contract;

use Livewire\Component;
use App\Models\Contract as Contrato;

class ContractInactive extends Component
{
    public $search;
    public function render()
    {

        $contracts = Contrato::where(
            'type_contract',
            'LIKE',
            '%' . $this->search . '%'
        )->OrderBy('id', 'desc')->where('status', '0')->get();
        return view('livewire.contract.contract-inactive', compact("contracts"));
    }
}
