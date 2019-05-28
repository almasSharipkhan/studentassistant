<?php

use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = new \App\Subject;
        $subjects->sub_name = 'Fundamental Informaton Security';
        $subjects->save();

        $subjects = new \App\Subject;
        $subjects->sub_name = 'Information theory';
        $subjects->save();

        $subjects = new \App\Subject;
        $subjects->sub_name = 'SDPI-11: Managing technical people';
        $subjects->save();

        $subjects = new \App\Subject;
        $subjects->sub_name = 'SWD-3: .NET';
        $subjects->save();

        $subjects = new \App\Subject;
        $subjects->sub_name = 'SWD-4: WEB';
        $subjects->save();

        $subjects = new \App\Subject;
        $subjects->sub_name = 'SDPI-10: System level programming';
        $subjects->save();

        $subjects = new \App\Subject;
        $subjects->sub_name = 'Reserve';
        $subjects->save();
    }
}
