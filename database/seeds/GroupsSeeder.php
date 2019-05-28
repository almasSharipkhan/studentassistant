<?php

use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new \App\Group;
        $group->group_name = 'CSSE-1601';
        $group->group_course = 3;
        $group->spec_id = 1;
        $group->save();

        $group = new \App\Group;
        $group->group_name = 'CSSE-1602';
        $group->group_course = 3;
        $group->spec_id = 1;
        $group->save();

        $group = new \App\Group;
        $group->group_name = 'CSSE-1603';
        $group->group_course = 3;
        $group->spec_id = 1;
        $group->save();

        $group = new \App\Group;
        $group->group_name = 'CSSE-1604';
        $group->group_course = 3;
        $group->spec_id = 1;
        $group->save();

        $group = new \App\Group;
        $group->group_name = 'Teachers';
        $group->group_course = 4;
        $group->spec_id = 1;
        $group->save();
    }
}
