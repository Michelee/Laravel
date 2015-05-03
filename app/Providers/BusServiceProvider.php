<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Curso\Providers;
=======
<?php namespace App\Providers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
<?php namespace App\Providers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

class BusServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @param  \Illuminate\Bus\Dispatcher  $dispatcher
	 * @return void
	 */
	public function boot(Dispatcher $dispatcher)
	{
		$dispatcher->mapUsing(function($command)
		{
			return Dispatcher::simpleMapping(
<<<<<<< HEAD
<<<<<<< HEAD
				$command, 'Curso\Commands', 'Curso\Handlers\Commands'
=======
				$command, 'App\Commands', 'App\Handlers\Commands'
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
				$command, 'App\Commands', 'App\Handlers\Commands'
>>>>>>> fc25262... Archivos proyecto nuevo laravel
			);
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
