<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Job;
use App\Models\Employee;

class Departament extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function jobs()
    {
        return $this->hasMany(Job::class);
    }


    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
