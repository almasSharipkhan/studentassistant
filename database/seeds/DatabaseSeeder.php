<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DepartmentsSeeder');
        $this->command->info('Departments table seeded!');

        $this->call('SpecialitiesSeeder');
        $this->command->info('Specialities table seeded!');

        $this->call('GroupsSeeder');
        $this->command->info('Groups table seeded!');

        $this->call('SubjectsSeeder');
        $this->command->info('Subjects table seeded!');

        $this->call('UsersSeeder');
        $this->command->info('Users table seeded!');

        $this->call('RoomsSeeder');
        $this->command->info('Rooms table seeded!');

        $this->call('EventsSeeder');
        $this->command->info('Events table seeded!');

        $this->call('SchedulesSeeder');
        $this->command->info('Schedules table seeded!');

        $this->call('UsersEventsSeeder');
        $this->command->info('UsersEvents table seeded!');

    }
}
