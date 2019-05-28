<?php

use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = new \App\Schedule;
        $schedule->sub_id = 2;
        $schedule->room_id = 1;
        $schedule->user_id = 2;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 1;
        $schedule->schedule_date = '2019-05-24 09:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 2;
        $schedule->room_id = 1;
        $schedule->user_id = 2;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 1;
        $schedule->schedule_date = '2019-05-24 10:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 5;
        $schedule->room_id = 8;
        $schedule->user_id = 5;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 1;
        $schedule->schedule_date = '2019-05-24 11:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 5;
        $schedule->room_id = 8;
        $schedule->user_id = 5;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 1;
        $schedule->schedule_date = '2019-05-24 12:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 5;
        $schedule->room_id = 8;
        $schedule->user_id = 5;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'practice';
        $schedule->schedule_day = 1;
        $schedule->schedule_date = '2019-05-24 13:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 2;
        $schedule->room_id = 6;
        $schedule->user_id = 2;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lecture';
        $schedule->schedule_day = 2;
        $schedule->schedule_date = '2019-05-24 10:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 5;
        $schedule->room_id = 11;
        $schedule->user_id = 5;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lecture';
        $schedule->schedule_day = 2;
        $schedule->schedule_date = '2019-05-24 11:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 1;
        $schedule->room_id = 12;
        $schedule->user_id = 1;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lecture';
        $schedule->schedule_day = 2;
        $schedule->schedule_date = '2019-05-24 12:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 3;
        $schedule->room_id = 3;
        $schedule->user_id = 3;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 2;
        $schedule->schedule_date = '2019-05-24 13:10:00';
        $schedule->save();


        $schedule = new \App\Schedule;
        $schedule->sub_id = 3;
        $schedule->room_id = 3;
        $schedule->user_id = 3;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 2;
        $schedule->schedule_date = '2019-05-24 14:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 4;
        $schedule->room_id = 11;
        $schedule->user_id = 4;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lecture';
        $schedule->schedule_day = 3;
        $schedule->schedule_date = '2019-05-24 11:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 4;
        $schedule->room_id = 3;
        $schedule->user_id = 4;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'practice';
        $schedule->schedule_day = 3;
        $schedule->schedule_date = '2019-05-24 12:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 1;
        $schedule->room_id = 3;
        $schedule->user_id = 1;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 3;
        $schedule->schedule_date = '2019-05-24 13:10:00';
        $schedule->save();


        $schedule = new \App\Schedule;
        $schedule->sub_id = 1;
        $schedule->room_id = 3;
        $schedule->user_id = 1;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 3;
        $schedule->schedule_date = '2019-05-24 14:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 6;
        $schedule->room_id = 9;
        $schedule->user_id = 6;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 4;
        $schedule->schedule_date = '2019-05-24 09.00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 6;
        $schedule->room_id = 9;
        $schedule->user_id = 6;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 4;
        $schedule->schedule_date = '2019-05-24 10:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 6;
        $schedule->room_id = 13;
        $schedule->user_id = 6;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lecture';
        $schedule->schedule_day = 4;
        $schedule->schedule_date = '2019-05-24 11:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 3;
        $schedule->room_id = 13;
        $schedule->user_id = 3;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lecture';
        $schedule->schedule_day = 4;
        $schedule->schedule_date = '2019-05-24 12:10:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 4;
        $schedule->room_id = 2;
        $schedule->user_id = 4;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 5;
        $schedule->schedule_date = '2019-05-24 09:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 4;
        $schedule->room_id = 2;
        $schedule->user_id = 4;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'lab';
        $schedule->schedule_day = 5;
        $schedule->schedule_date = '2019-05-24 10:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 6;
        $schedule->room_id = 2;
        $schedule->user_id = 6;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'practice';
        $schedule->schedule_day = 5;
        $schedule->schedule_date = '2019-05-24 11:00:00';
        $schedule->save();

        $schedule = new \App\Schedule;
        $schedule->sub_id = 1;
        $schedule->room_id = 7;
        $schedule->user_id = 1;
        $schedule->group_id = 3;
        $schedule->schedule_type = 'practice';
        $schedule->schedule_day = 5;
        $schedule->schedule_date = '2019-05-24 12:10:00';
        $schedule->save();
    }
}
