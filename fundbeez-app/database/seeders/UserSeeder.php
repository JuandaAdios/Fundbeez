<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::count() > 0){
            return $this->command->info('Role already seeded');
        }

        $users = [
            [
                'name' => 'FundBeez',
                'role_id' => Role::where('name', 'admin')->value('id'),
                'email' => 'fundbeez@gmail.com',
                'password' => bcrypt('fundbeez123'),
            ],
            [
                'name' => 'User Fundbeez',
                'role_id' => Role::where('name', 'user')->value('id'),
                'email' => 'user@funbeez.com',
                'password' => bcrypt('fundbeez123'),
            ],
        ];

        foreach($users as $user){
            $created = User::create($user);
            $created->markEmailAsVerified();
        }
    }
}
