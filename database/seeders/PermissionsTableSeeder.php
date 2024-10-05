<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'category', 'guard_name' => 'web']);
        Permission::create(['name' => 'category.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'category.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'category.update', 'guard_name' => 'web']);
        Permission::create(['name' => 'category.delete', 'guard_name' => 'web']);
    }
}
