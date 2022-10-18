<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roles = [
            ['name' =>'manager'],
            ['name' =>'operator'],
            ['name' =>'reader'],
        ];

        foreach ($roles as $role) {
           Role::factory(1)->create($role);
        }
    }
}
