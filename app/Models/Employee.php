<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\Departament;
use App\Models\Contract;
use App\Models\CiExtension;
use App\Models\User;
use App\Models\News;
use App\Models\Attendances;
use App\Models\License;


class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];



    //uno a mucho inverso

    public function job()
    {
        return $this->belongsTo(Job::class, "job_id", "id");
    }

    public function department()
    {
        return $this->belongsTo(Departament::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function ciextension()
    {
        return $this->belongsTo(CiExtension::class, "ci_extension_id", "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function attendances()
    {
        return $this->hasMany(Attendances::class, "employee_id", "id");
    }


    //relacion muchos a muchos

    public function licenses()
    {
        return $this->belongsToMany(License::class);
    }
}
