<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Assign permissions to roles.
     */
    public function run(): void
    {
        // Platform Super Admin gets everything
        $platformSuperAdmin = Role::findByName('Platform Super Admin');

        $platformSuperAdmin->syncPermissions(
            Permission::all()
        );

        // Platform Administrator
        Role::findByName('Platform Administrator')
            ->syncPermissions([
                'manage companies',
                'manage platform users',
                'manage subscriptions',
                'manage platform settings',
                'view audit logs',
            ]);

        // Company Administrator
        Role::findByName('Company Administrator')
            ->syncPermissions([
                'manage employees',
                'manage departments',
                'manage positions',
                'manage teams',
                'manage kpis',
                'manage documents',
                'manage fleet',
                'manage reports',
            ]);
    }
}