<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departament;
use App\Models\Employee;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function departament()
    {

        return $this->belongsTo(Departament::class, "departament_id", "id",);
    }

    //relacion 1 a muchos
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
