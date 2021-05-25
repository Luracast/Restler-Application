<?php

use App\Home;
use Luracast\Restler\Restler;

require __DIR__ . '/../vendor/autoload.php';


$r =  new Restler();

$r->addAPIClass(Home::class,'');
$r->addAPIClass('Explorer');

$r->handle();
