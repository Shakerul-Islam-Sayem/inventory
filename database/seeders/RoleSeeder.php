<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\App;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'title' => 'Administration', 'description' => 'Administration', 'status' => 1,
            'title' => 'Supervisor', 'description' => 'Supervisor', 'status' => 1,
            'title' => 'Contributor', 'description' => 'Contributor', 'status' => 1,
            'title' => 'Member', 'description' => 'Member', 'status' => 1,
            'title' => 'Viewer', 'description' => 'Viewer', 'status' => 2,
            'title' => 'Manager', 'description' => 'Manager', 'status' => 1,
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
