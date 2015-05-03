<<<<<<< HEAD
<<<<<<< HEAD
<?php namespace Curso\Http\Middleware;
=======
<?php namespace App\Http\Middleware;
>>>>>>> fc25262... Archivos proyecto nuevo laravel
=======
<?php namespace App\Http\Middleware;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		return parent::handle($request, $next);
	}

}
