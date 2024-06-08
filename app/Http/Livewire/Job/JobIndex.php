<?php

namespace App\Http\Livewire\Job;

use Livewire\Component;
use App\Models\Job as trabajo;

class JobIndex extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.job.job-index', [
            'jobs' => trabajo::where(
                'name',
                'LIKE',
                '%' . $this->search . '%'
            )->OrderBy('id', 'desc')->where('status', '1')->get()
        ]);
    }
}
