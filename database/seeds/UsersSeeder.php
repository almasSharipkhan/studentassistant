<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->user_id = 21211;
        $user->user_role = 2;
        $user->user_name = 'Azhar';
        $user->user_surname = 'Sagymbekova';
        $user->dep_id = 1;
        $user->email = 'ahzar@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1985-05-21';
        $user->save();

        $user = new \App\User;
        $user->user_id = 21511;
        $user->user_role = 2;
        $user->user_name = 'Botagoz';
        $user->user_surname = 'Kalieva';
        $user->dep_id = 1;
        $user->email = 'botagoz@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1988-06-09';
        $user->save();

        $user = new \App\User;
        $user->user_id = 22165;
        $user->user_role = 2;
        $user->user_name = 'Altinay';
        $user->user_surname = 'Abdulanova';
        $user->dep_id = 1;
        $user->email = 'abdulanova@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1992-05-13';
        $user->save();

        $user = new \App\User;
        $user->user_id = 22654;
        $user->user_role = 2;
        $user->user_name = 'Ergali';
        $user->user_surname = 'Dauletbek';
        $user->dep_id = 1;
        $user->email = 'dauletbek@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1989-01-01';
        $user->save();

        $user = new \App\User;
        $user->user_id = 25987;
        $user->user_role = 2;
        $user->user_name = 'Nurzhan';
        $user->user_surname = 'Mukazhanov';
        $user->dep_id = 1;
        $user->email = 'nurzhan@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1985-03-02';
        $user->save();

        $user = new \App\User;
        $user->user_id = 25456;
        $user->user_role = 2;
        $user->user_name = 'Zhansaya';
        $user->user_surname = 'Amir';
        $user->dep_id = 1;
        $user->email = 'zhansaya@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1992-07-05';
        $user->save();

        $user = new \App\User;
        $user->user_id = 21622;
        $user->user_role = 1;
        $user->user_name = 'Almas';
        $user->user_surname = 'Sharipkhan';
        $user->user_course = 3;
        $user->group_id = 1;
        $user->dep_id = 1;
        $user->email = 'almassharipkhan@gmail.com';
        $user->password = Hash::make('qwerty123');
        $user->user_birthday = '1996-05-13';
        $user->save();
    }
}
