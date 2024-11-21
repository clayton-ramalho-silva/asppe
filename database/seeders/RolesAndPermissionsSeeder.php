<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar permissões
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        // Criar papéis
        $admin = Role::create(['name' => 'admin']);
        $recruiter = Role::create((['name' => 'recruiter']));
        $applicant = Role::create(['name' => 'applicant']);

        // Atribuir permissoes aos papeis
        $admin->givePermissionTo(Permission::all());
        $recruiter->givePermissionTo(['view user', 'edit user']);
        $applicant->givePermissionTo(['view user']);
    }
}


// Usei para popular alguns papeis direto no controler admin
//$admin = User::find(1);
//$admin->assignRole('admin');

//$recruiter = User::find(2);
//$recruiter->assignRole('recruiter');

//$applicant = User::find(3);
//$applicant->assignRole('applicant');

//$admin->givePermissionTo(Permission::all());
//$recruiter->givePermissionTo(['view user', 'edit user']);
//$applicant->givePermissionTo(['view user']);