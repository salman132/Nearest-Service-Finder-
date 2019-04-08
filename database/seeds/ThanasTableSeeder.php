<?php

use Illuminate\Database\Seeder;

class ThanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Thana::create([
            'district_id'=> '1',
            'thana'=> 'Uttara'
        ]);
        \App\Thana::create([
            'district_id'=> '1',
            'thana'=> 'Banani'
        ]);
        \App\Thana::create([
            'district_id'=> '1',
            'thana'=> 'Gulshan'
        ]);
        \App\Thana::create([
            'district_id'=> '2',
            'thana'=> 'Lal Dighi'
        ]);
        \App\Thana::create([
            'district_id'=> '2',
            'thana'=> 'Kolatoli'
        ]);
        \App\Thana::create([
            'district_id'=> '3',
            'thana'=> 'Jaydep Pur'
        ]);
        \App\Thana::create([
            'district_id'=> '3',
            'thana'=> 'Pubail'
        ]);
        \App\Thana::create([
            'district_id'=> '4',
            'thana'=> 'Nakhal Para'
        ]);
        \App\Thana::create([
            'district_id'=> '4',
            'thana'=> 'Airport'
        ]);
    }
}
