<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Role::create([
            'name'=> 'User'
        ]);
        \App\Role::create([
            'name'=> 'Host'
        ]);
    }
}
