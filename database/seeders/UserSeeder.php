<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Root',
            'email'=> 'admin@email.com',
            'password'=> bcrypt('password'),
            'role_id'=>1
        ]);

        User::create([
            'name'=> 'Agent',
            'email'=> 'agent@email.com',
            'password'=> bcrypt('password'),
            'role_id'=>2
        ]);
    }
}
