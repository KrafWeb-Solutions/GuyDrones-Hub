<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [

            // Platform
            'Platform Super Admin',
            'Platform Administrator',
            'Support Agent',
            'Billing Administrator',

            // Company
            'Company Administrator',
            'Manager',
            'Supervisor',
            'Employee',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }
    }
}