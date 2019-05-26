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
        $department = new \App\Department;
        $department->dep_name = 'Computer Engineering and Information Security';
        $department->head_of_dep = 'Duzbayev N.T.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Information Systems';
        $department->head_of_dep = 'Serbin V.V.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Mathematical and Computer Modeling';
        $department->head_of_dep = 'Rysbaiuly B.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Economy and Business';
        $department->head_of_dep = 'Dhildebekov E.Zh.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Media-Communication and History of Kazakhstan';
        $department->head_of_dep = 'Niazgulova A.A.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Languages Department';
        $department->head_of_dep = 'Zakirova G.D.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Radio Engineering, Electronics and Telecommunications';
        $department->head_of_dep = 'Unknown U.U.';
        $department->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Computer Science and Computer Engineering';
        $speciality->dep_id = 1;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Computer Science';
        $speciality->dep_id = 1;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Information Theory';
        $speciality->dep_id = 2;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Journalism';
        $speciality->dep_id = 5;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Management';
        $speciality->dep_id = 4;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Finance';
        $speciality->dep_id = 4;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Radio Engineering, Electronics and Telecommunications';
        $speciality->dep_id = 7;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Mathematical and Computer Modeling';
        $speciality->dep_id = 3;
        $speciality->save();

        $speciality = new \App\Speciality;
        $speciality->spec_name = 'Systems of Information Security';
        $speciality->dep_id = 1;
        $speciality->save();

        $group = new \App\Group;
        $group->group_name = 'CSSE-1603k';
        $group->group_course = 3;
        $group->spec_id = 1;
        $group->save();

        $user = new \App\User;
        $user->user_id = '21622';
        $user->user_role = 1;
        $user->user_name = 'Almas';
        $user->user_surname = 'Sharipkhan';
        $user->user_course = 3;
        $user->group_id = 1;
        $user->dep_id = 1;
        $user->email = 'a@mail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1996-05-13';
        $user->save();

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
            /*
        DB::table('events')->insert([
            'event_id' => 1,
            'event_author' => 'Madina',
            'event_short_description' => 'Madina Madina',
            'event_content' => 'Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina Madina',
        ]);

        DB::table('specialities')->insert([
            'speciality_id' => 1,
            'speciality_name' => 'SWD',
            'department_id' => 1,
        ]);

        DB::table('groups')->insert([
            'group_id' => '1603',
            'group_name' => 'CSSESWD',
            'speciality_id' => 1,
            'student_quantity' => 0,
        ]);*/
    }
}
