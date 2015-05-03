<<<<<<< HEAD
<?php namespace Curso\Http\Controllers;
=======
<?php namespace App\Http\Controllers;
>>>>>>> fc25262... Archivos proyecto nuevo laravel

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

}
