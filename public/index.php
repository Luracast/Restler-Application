<?php

use Luracast\Restler\Restler;

require __DIR__ . '/../vendor/autoload.php';


$r =  new Restler();

$r->addAPIClass('Home','');
$r->addAPIClass('Explorer');

$r->handle();
