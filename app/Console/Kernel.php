<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Curso\Console;
=======
<?php namespace App\Console;
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
<?php namespace App\Console;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
<<<<<<< HEAD
<<<<<<< HEAD
		'Curso\Console\Commands\Inspire',
=======
		'App\Console\Commands\Inspire',
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
		'App\Console\Commands\Inspire',
>>>>>>> fc25262... Archivos proyecto nuevo laravel
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('inspire')
				 ->hourly();
	}

}
