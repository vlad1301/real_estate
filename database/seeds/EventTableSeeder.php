<?php

use App\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $eventTypes=[
                'Conferences',
                'Award Ceremonies',
                'The Unusual',
                'Private dining',
                'Meeting',
                'Parties'
            ];

            foreach($eventTypes as $eventType){
                Event::create([
                    'name'=>$eventType,
                    'slug'=>Str::slug($eventType)
                ]);
            }
        }
    }
}
