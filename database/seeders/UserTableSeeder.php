<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'emeraldjunn',
                'email' => 'emeraldjunn@gmail.com',
                'password' => Hash::make('Wangy1bo'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('Wangy1bo'),
                'role' => 'agent',
                'status' => 'active',
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('Wangy1bo'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
