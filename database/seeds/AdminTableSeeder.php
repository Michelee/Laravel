<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

    public function run(){
        \DB::table('users')->insert(array(
            'first_name' => 'Michele',
            'email' => 'm@gmail.com',
            'password' => \Hash::make('secreto'),
            'type' => 'admin'
        ));
    }


}