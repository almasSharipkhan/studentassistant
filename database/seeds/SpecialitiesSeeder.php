<?php

use Illuminate\Database\Seeder;

class SpecialitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
