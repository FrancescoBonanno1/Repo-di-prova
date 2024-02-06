<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_events = config("event");

        foreach ($array_events as $event_item) {
            $new_event = new Event();

            $new_event->name = $event_item["name"];
            $new_event->image= $event_item["image"];
            $new_event->description = $event_item["description"];
            $new_event->date = $event_item["date"];
            $new_event->save();
        }  
    }
}
