<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_tags = config("tag");

        foreach ($array_tags as $tag_item) {
            $new_event = new Tag();

            $new_event->name = $tag_item["name"];
            $new_event->image= $tag_item["image"];
            $new_event->description = $tag_item["description"];
            $new_event->date = $tag_item["date"];
            $new_event->save();
        }  
    }
}
