<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $teacher = Role::create(['name' => 'teacher']);
        $student = Role::create(['name' => 'student']);

        /*
          admin => todo
          teacher => dashboard, listado, info de developer
          student => index
         */

        Permission::create(['name' => 'dashboard'])->syncRoles([$admin,$teacher,$student]);//->assignRole($admin);
        Permission::create(['name' => 'users.index'])->syncRoles([$admin,$teacher]);//->assignRole($admin);
        Permission::create(['name' => 'users.show'])->syncRoles([$admin,$teacher]);//->assignRole($admin);
        Permission::create(['name' => 'users.create'])->syncRoles([$admin]);//->assignRole($admin);
        Permission::create(['name' => 'users.edit'])->syncRoles([$admin]);//->assignRole($admin);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$admin]);//->assignRole($admin);

        //$admin->permissions()->attach([1,2,3,4...]);



    }
}
