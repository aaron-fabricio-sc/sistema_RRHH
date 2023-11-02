<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Contract extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
