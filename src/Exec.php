<?php

namespace Schons\ApiExec;


class Exec
{

    protected $path_file;

    protected $hour;

    protected $hour_now;

    public function __construct($path_file = null, $hour = '00:00')
    {
        $this->setPath($path_file);
        $this->setHour($hour);
        $this->setHourNow();
    }



    public function run()
    {
        $this->setHourNow(date('H:i'));
        if ($this->getHourNow() == $this->getHour()) {
            //exec('bash ' . $this->getPath());
            echo 'Hora de executar';
        }else{
            echo 'Ainda não é a hora';
        }
    }


    public function setHourNow()
    {
        $this->hour_now = date('H:i');
    }

    public function getHourNow()
    {
        return $this->hour_now;
    }

    public function setPath($path)
    {
        $this->path_file = $path;
    }

    public function getPath()
    {
        return $this->path_file;
    }

    public function getHour()
    {
        return $this->hour;
    }

    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    public function getHourToCron()
    {
        $hour = explode(':', $this->getHour());
        return $hour[1] . ' ' . $hour[0] . ' * * *';
    }

}