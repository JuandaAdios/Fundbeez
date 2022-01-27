<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Role::count() > 0){
            return $this->command->info('Role already seeded');
        }

        $roles = [
            'admin',
            'user',
        ];

        foreach($roles as $role){
            Role::create(['name' => $role]);
        }
    }
}
