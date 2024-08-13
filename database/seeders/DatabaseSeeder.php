<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CiExtension;
use App\Models\Contract;
use App\Models\Contracts;
use App\Models\Departament;
use App\Models\Job;
use App\Models\License;
use App\Models\News;
use App\Models\User;
use Database\Factories\NewsFactory;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        //   Primero se ejecutan los roles para la aplicaciones
        $this->call(RoleSeeder::class);
        User::create([
            "name" => 'aaron',
            "email" => 'aaron@aaron.com',
            "password" => bcrypt(123456)
        ])->assignRole("super_admin");
        User::factory(10)->create();

        //Departament::factory(30)->create();
        $this->call(DepartamentSeeder::class);
        Job::factory(20)->create();

        Contract::factory(10)->create();
        $this->call(ContractsSeeder::class);
        $this->call(CiExtensionSeeder::class);

        //License::factory(10)->create();

        News::factory(10)->create();

        $this->call(settingsSeeder::class);
    }
}
