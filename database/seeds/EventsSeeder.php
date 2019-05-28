<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new \App\Event;
        $event->user_id = 1;
        $event->event_description = 'Madina';
        $event->event_content = 'Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina';
        $event->event_date = '2019-05-13 12:12:12';
        $event->save();

        $event = new \App\Event;
        $event->user_id = 1;
        $event->event_description = 'Almas';
        $event->event_content = 'Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina';
        $event->event_date = '2019-06-13 12:12:12';
        $event->save();
    }
}
