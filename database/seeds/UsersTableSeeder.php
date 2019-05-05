<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'id' => 1,
            'name'=> 'Salman Rahman Auvi',
            'email'=> 'salman.auvi@gmail.com',
            'admin'=> '1',
            'completed'=>1,
            'password'=> bcrypt(123456789)
        ]);
    }
}
