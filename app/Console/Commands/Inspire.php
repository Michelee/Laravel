<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Curso\Console\Commands;
=======
<?php namespace App\Console\Commands;
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
<?php namespace App\Console\Commands;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Inspire extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'inspire';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Display an inspiring quote';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
	}

}
