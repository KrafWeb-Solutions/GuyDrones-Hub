<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Seed the application's permissions.
     */
    public function run(): void
    {
        $permissions = [

            // Platform
            'manage companies',
            'manage platform users',
            'manage subscriptions',
            'manage platform settings',
            'view audit logs',

            // Company
            'manage employees',
            'manage departments',
            'manage positions',
            'manage teams',
            'manage kpis',
            'manage documents',
            'manage fleet',
            'manage reports',

        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
    }
}