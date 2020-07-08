<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create([
            'name'       => 'Admin',
            'email'      => 'admin@gmail.com',
            'password'   => bcrypt('1234567890'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
