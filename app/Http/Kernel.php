<<<<<<< HEAD
<?php namespace Curso\Http;
=======
<?php namespace App\Http;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
<<<<<<< HEAD
		'Curso\Http\Middleware\VerifyCsrfToken',
=======
		'App\Http\Middleware\VerifyCsrfToken',
>>>>>>> fc25262... Archivos proyecto nuevo laravel
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
<<<<<<< HEAD
		'auth' => 'Curso\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'Curso\Http\Middleware\RedirectIfAuthenticated',
=======
		'auth' => 'App\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
>>>>>>> fc25262... Archivos proyecto nuevo laravel
	];

}
