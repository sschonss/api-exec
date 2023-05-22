<?php

require __DIR__ . '/vendor/autoload.php';

use Schons\ApiExec\Exec;
use Schons\ApiExec\Utils\LoadEnv;

$dotenv = new LoadEnv(__DIR__ . '/config');
$dotenv->load();

$path = $dotenv->get('PATH_FILE');

$expression = $dotenv->get('EXPRESSION');

$exec = new Exec($path, $expression);

$exec->run();







