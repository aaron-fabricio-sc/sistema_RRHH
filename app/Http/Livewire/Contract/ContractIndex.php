<?php

namespace App\Http\Livewire\Contract;

use App\Models\Contract as Contrato;
use Livewire\Component;

class ContractIndex extends Component
{


    public $search;
    public function render()
    {

        $contracts =
            Contrato::where(
                'type_contract',
                'LIKE',
                '%' . $this->search . '%'
            )->OrderBy('id', 'desc')->where('status', '1')->get();
        return view('livewire.contract.contract-index', compact("contracts"));
    }
}
