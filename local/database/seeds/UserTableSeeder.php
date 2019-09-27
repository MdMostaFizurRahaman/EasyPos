<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin'),
            'admin' => 1,
            'role' => 'admin',
            'image' => 'admin.jpg'
        ]);

        User::create([
            'name' => "User",
            'email' => "user@gmail.com",
            'password' => bcrypt('user'),
            'admin' => 0,
            'role' => 'user',
            'image' => 'admin.jpg'
        ]);
    }
}
