<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Curso\Providers;
=======
<?php namespace App\Providers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
<?php namespace App\Providers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
<<<<<<< HEAD
<<<<<<< HEAD
			'Curso\Services\Registrar'
=======
			'App\Services\Registrar'
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
			'App\Services\Registrar'
>>>>>>> fc25262... Archivos proyecto nuevo laravel
		);
	}

}
