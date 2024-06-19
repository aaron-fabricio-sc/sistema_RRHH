<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        /*
            admin => todos los permisos
            manager => crear actualizar listar eliminar
            user => solo puede ver el dashboar
        */
        $superAdmin = Role::create(['name' => "super_admin"]);
        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);
        $employee = Role::create(['name' => 'employee']);

        /////USUARIOS//////
        Permission::create(["name" => "admin.users.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.users.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.users.create"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.store"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.edit"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.update"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.destroy"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.rol"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.rol.update"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.users.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.user.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);


        ////////////DEPARTAMENTOS//////////////////

        Permission::create(["name" => "admin.departments.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.departments.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.departments.create"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.departments.store"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.departments.edit"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.departments.update"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.departments.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "admin.departments.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.departments.inactivate"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.departments.activate"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.departments.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.departments.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);

        /////////////TRABAJOS//////////////////

        Permission::create(["name" => "admin.jobs.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.jobs.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.jobs.create"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.jobs.store"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.jobs.edit"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.jobs.update"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.jobs.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "admin.jobs.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.jobs.inactivate"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.jobs.activate"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.jobs.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.jobs.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);

        /////////CONTRATOS/////////
        Permission::create(["name" => "admin.contracts.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.contracts.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.contracts.create"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.contracts.store"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.contracts.edit"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.contracts.update"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.contracts.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "admin.contracts.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.contracts.inactivate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "admin.contracts.activate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "admin.contracts.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.contracts.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);


        //////////employees/////////

        Permission::create(["name" => "admin.employees.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.employees.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.employees.create"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.employees.store"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.employees.edit"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.employees.update"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.employees.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "admin.employees.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.employees.inactivate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "admin.employees.activate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "admin.employees.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);

        Permission::create(["name" => "admin.employees.viewAssignUser"])->syncRoles([$superAdmin, $admin]);

        Permission::create(["name" => "admin.employees.assignUser"])->syncRoles([$superAdmin, $admin]);

        Permission::create(["name" => "admin.employees.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);





        ///////////////NOTICIAS///////////

        Permission::create(["name" => "news.index"])->syncRoles([$superAdmin, $admin, $manager, $employee]);
        Permission::create(["name" => "news.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "news.create"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "news.store"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "news.edit"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "news.update"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "news.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "news.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "news.inactivate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "news.activate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "news.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);

        Permission::create(["name" => "news.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);




        ////////////ASISTENCIAS//////////////


        Permission::create(["name" => "attendances.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "attendances.show"])->syncRoles([
            $superAdmin, $admin, $manager
        ]);
        Permission::create(["name" => "attendances.create"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "attendances.store"])->syncRoles([$superAdmin, $admin]);

        Permission::create(["name" => "attendances.edit"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "attendances.update"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "attendances.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "attendances.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "attendances.inactivate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "attendances.activate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "attendances.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "attendances.salida"])->syncRoles([$superAdmin, $admin, $manager, $employee]);
        Permission::create(["name" => "attendaces.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);


        //licenses
        Permission::create(["name" => "admin.licenses.index"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.show"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.create"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.store"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.edit"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.update"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.destroy"])->syncRoles([$superAdmin]);
        Permission::create(["name" => "admin.licenses.inactive"])->syncRoles([$superAdmin, $admin]);
        Permission::create(["name" => "admin.licenses.inactivate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "admin.licenses.activate"])->syncRoles([
            $superAdmin, $admin
        ]);
        Permission::create(["name" => "admin.licenses.viewConfirmDelete"])->syncRoles([$superAdmin, $admin]);

        Permission::create(["name" => "admin.licenses.pdf.list"])->syncRoles([$superAdmin, $admin, $manager]);


        Permission::create(["name" => "admin.licenses.requetsView"])->syncRoles([$superAdmin, $admin, $manager, $employee]);


        Permission::create(["name" => "admin.licenses.requets"])->syncRoles([$superAdmin, $admin, $manager, $employee]);

        Permission::create(["name" => "admin.licenses.activityLicenses"])->syncRoles([$superAdmin, $admin, $manager, $employee]);
        Permission::create(["name" => "admin.licenses.confirmLicense"])->syncRoles([$superAdmin, $admin, $manager]);
        Permission::create(["name" => "admin.licenses.refuseLicense"])->syncRoles([$superAdmin, $admin, $manager]);
    }
}
