<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate a random 10-character username and email
        $username = 'admin';
        $email = 'admin@ehb.be';
        $password = 'Password!321';

        // Insert the admin user into the users table
        DB::table('users')->insert([
            'name' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'userType' => 'admin',
        ]);
    }

}
