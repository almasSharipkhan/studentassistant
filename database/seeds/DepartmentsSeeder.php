<?php

use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new \App\Department;
        $department->dep_name = 'Computer Engineering and Information Security';
        $department->dep_head_of = 'Duzbayev N.T.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Information Systems';
        $department->dep_head_of = 'Serbin V.V.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Mathematical and Computer Modeling';
        $department->dep_head_of = 'Rysbaiuly B.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Economy and Business';
        $department->dep_head_of = 'Dhildebekov E.Zh.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Media-Communication and History of Kazakhstan';
        $department->dep_head_of = 'Niazgulova A.A.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Languages Department';
        $department->dep_head_of = 'Zakirova G.D.';
        $department->save();

        $department = new \App\Department;
        $department->dep_name = 'Radio Engineering, Electronics and Telecommunications';
        $department->dep_head_of = 'Unknown U.U.';
        $department->save();
    }
}
