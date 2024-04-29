<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $role_admin = Role::updateOrcreate(
                [
                'name' => 'admin'
                ],
                ['name' => 'admin']
        );

            $role_guru = Role::updateOrcreate(
                [
                'name' => 'guru'
                ],
                ['name' => 'guru']
        );

        $role_siswa = Role::updateOrcreate(
            [
            'name' => 'siswa'
            ],
            ['name' => 'siswa']
        );

        $permission = Permission::updateOrcreate(
            [
                'name' => 'view_dashboard',
            ],
            [
                'name' => 'view_dashboard',
            ]
            );
            $permission2 = Permission::updateOrcreate(
                [
                    'name' => 'view_userdata',
                ],
                [
                    'name' => 'view_userdata',
                ]
                );

            $role_admin->givePermissionTo($permission);
            $role_admin->givePermissionTo($permission2);
            $role_guru->givePermissionTo($permission2);

            $user = User::find(1);

    }
}
