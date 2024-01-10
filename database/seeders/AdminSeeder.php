<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $admin = [
        'name' => 'admin',
        'email' => 'admin@ehb.be',
        'password' => bcrypt('Password!321'),
    ];

    User::create($admin);
}

}
