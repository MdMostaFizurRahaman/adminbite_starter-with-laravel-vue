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
            'image' => 'https://via.placeholder.com/50x50'
        ]);
    }
}