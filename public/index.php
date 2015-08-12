<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__ . '/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Configure your Web Application
|--------------------------------------------------------------------------
*/


use Luracast\Restler\Restler;

$r = new Restler(getenv('APP_ENV') == 'production');
$r->addApiClass('Home', '');
$r->addApiClass('Explorer');


/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application set up, we can simply let it handle the
| request and response
|
*/

$r->handle();
