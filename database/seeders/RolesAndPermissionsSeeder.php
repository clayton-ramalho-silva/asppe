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
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);

        // Criar papéis
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create((['name' => 'editor']));

        // Atribuir permissoes aos papeis
        $admin->givePermissionTo(['view posts', 'edit posts', 'delete posts']);
        $editor->givePermissionTo(['view posts', 'edit posts']);
    }
}
