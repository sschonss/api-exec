<?php

namespace Schons\ApiExec\Convert;

abstract class Convert
{
    protected $original_file;

    protected $converted_file;

    public function __contruct($original_file, $converted_file)
    {
        $this->setOriginalFile($original_file);
        $this->setConvertedFile($converted_file);
    }

    public function getOriginalFile()
    {
        return $this->original_file;

    }

    public function getConvertedFile()
    {
        return $this->converted_file;
    }

    public function setOriginalFile($original_file)
    {
        $this->original_file = $original_file;
    }

    public function setConvertedFile($converted_file)
    {
        $this->converted_file = $converted_file;
    }

    public function getExtension($file)
    {
        $extension = explode('.', $file);
        return end($extension);
    }

}