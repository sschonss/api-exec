<?php

namespace Schons\ApiExec;

require './vendor/autoload.php';

use Cron;

class Exec
{
    protected $path_file;

    protected $count_exec = 0;

    protected $expression;

    public function __construct($path_file = null, $expression = null)
    {
        $this->setPath($path_file);

        $this->setExpression($expression);
    }

    public function run()
    {
        //a cada hora, executar o script
        $cron = new Cron\CronExpression($this->getExpression());
        while (true) {
            if ($cron->isDue()) {
                $this->execute();
            }
            sleep(1);
        }
    }

    public function execute() :void
    {
        try {
            exec($this->getPath(), $output, $return_var);
            $this->incrementCountExec();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        $num = $this->getCountExec();
        echo "Executado $num vezes". PHP_EOL;
    }

    public function setPath($path)
    {
        $this->path_file = $path;
    }

    public function getPath()
    {
        return $this->path_file;
    }

    public function getCountExec()
    {
        return $this->count_exec;
    }

    public function incrementCountExec()
    {
        $this->count_exec++;
    }

    public function decrementCountExec()
    {
        $this->count_exec--;
    }

    public function setExpression($expression)
    {
        $this->expression = $expression;
    }

    public function getExpression()
    {
        return $this->expression;
    }

}