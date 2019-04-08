<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\District::create([
            'name'=>'Dhaka'
        ]);
        \App\District::create([
            'name'=>'Coxes Bazar'
        ]);
        \App\District::create([
            'name'=>'Gazipur'
        ]);
        \App\District::create([
            'name'=>'Chittagong'
        ]);
    }
}
