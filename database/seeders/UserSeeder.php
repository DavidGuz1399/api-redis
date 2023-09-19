<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'username' => 'tester',
            'password' => bcrypt('PASSWORD'),
            'role' => 'manager',
        ]);
        User::create([
            'username' => 'David',
            'password' => bcrypt('test123'),
            'role' => 'agent',
        ]);
    }
}
