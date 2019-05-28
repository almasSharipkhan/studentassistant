<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $room = new \App\Room;
        $room->room_number = 304;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 303;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 404;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 405;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 406;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 800;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 206;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 605;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 603;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 702;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 905;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 902;
        $room->save();

        $room = new \App\Room;
        $room->room_number = 203;
        $room->save();
    }
}
