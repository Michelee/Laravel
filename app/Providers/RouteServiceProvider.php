<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Curso\Providers;
=======
<?php namespace App\Providers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
<?php namespace App\Providers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	protected $namespace = 'Curso\Http\Controllers';
=======
	protected $namespace = 'App\Http\Controllers';
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
	protected $namespace = 'App\Http\Controllers';
>>>>>>> fc25262... Archivos proyecto nuevo laravel

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		//
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
