<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run(){
        \DB::table('users')->insert(array(
            'name' => 'Michele',
            'email' => 'm@gmail.com',
            'password' => \Hash::make('secreto')
        ));
    }


}