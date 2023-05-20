<?php

require __DIR__ . '/vendor/autoload.php';

use Schons\ApiExec\Exec;

$exec = new Exec('public/file.sh', '09:35');

$exec=>getHourNow();

$exec->run();






