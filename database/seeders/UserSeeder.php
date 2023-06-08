<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. create a super admin
        $superAdmin = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
        ]);
        $superAdmin->syncRoles('Super Admin');

        // 2. create a admin unit
        $adminUnit = User::factory()->create([
            'name' => 'Admin Unit',
            'email' => 'adminunit@example.com',
        ]);
        $adminUnit->syncRoles('Admin Unit');

        // 3. create a staff unit
        $staffUnit = User::factory()->create([
            'name' => 'Staff Unit',
            'email' => 'staffunit@example.com',
        ]);
        $staffUnit->syncRoles('Staff Unit');
    }
}
