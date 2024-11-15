<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'physicial']);
        $role3 = Role::create(['name' => 'secretary']);
        $role4 = Role::create(['name' => 'patient']);
    }
}
