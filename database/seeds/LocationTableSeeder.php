<?php

use Illuminate\Database\Seeder;
use App\Location;
use Illuminate\Support\Str;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $locations=[
            'London',
            'Manchester',
            'Liverpool',
            'Birmingham'
        ];

            foreach($locations as $location)
            {
                Location::create([
                    'name'=>$location,
                    'slug'=>Str::slug($location),

                ]);
            }


    }

}
