<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departament;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id();



        Departament::create([
            'name' => 'Departamento de TI',
            'description' => 'Departamento de Tecnologia da Información',
            'status' => 1
        ]);
    }
}
