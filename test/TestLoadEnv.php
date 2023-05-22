<?php

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

class TestLoadEnv extends TestCase
{

    protected $path_env = __DIR__ . '/../config/test';

    protected $path_file_test = 'public/test/test.sh';

    protected $expression_test = '0 * * * *';

    protected $dotenv;


    //carrega o arquivo .env

    public function load(): void
    {
        $this->dotenv = Dotenv::createImmutable($this->path_env);
        $this->dotenv->load();
    }

    public function testGetEnv()
    {
        $this->load();
        $this->assertNotEmpty($_ENV['PATH_FILE']);
        $this->assertNotEmpty($_ENV['EXPRESSION']);
    }

    public function testGetEnvPathFile()
    {
        $this->load();
        $this->assertEquals($_ENV['PATH_FILE'], $this->path_file_test);
    }

    public function testGetEnvExpression()
    {
        $this->load();
        $this->assertEquals($_ENV['EXPRESSION'], $this->expression_test);
    }


}