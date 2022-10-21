<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'roles.list',
           'roles.create',
           'roles.edit',
           'roles.delete',
           'products.list',
           'products.create',
           'products.edit',
           'products.delete',
           'chat',
           'commands',
           'commands.list',
           'commands.create',
           'commands.edit',
           'commands.delete',
           'permissions.list',
           'permissions.create',
           'permissions.edit',
           'permissions.delete',
           'users.list',
           'users.create',
           'users.edit',
           'users.delete'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
