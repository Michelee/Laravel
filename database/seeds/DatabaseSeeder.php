<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

<<<<<<< HEAD
<<<<<<< HEAD
		 $this->call('AdminTableSeeder');
=======
		// $this->call('UserTableSeeder');
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
		// $this->call('UserTableSeeder');
>>>>>>> fc25262... Archivos proyecto nuevo laravel
	}

}
