<?php

namespace Schons\ApiExec\Utils;

use Dotenv\Dotenv;

class LoadEnv
{
    protected $path_env;

    public function __construct($path_env = null)
    {
        $this->setPathEnv($path_env);
    }

    public function setPathEnv($path_env)
    {
        $this->path_env = $path_env;
    }

    public function getPathEnv()
    {
        return $this->path_env;
    }

    public function load()
    {
        $dotenv = Dotenv::createImmutable($this->getPathEnv());
        $dotenv->load();
    }

    public function get($key)
    {
        return $_ENV[$key];
    }

}