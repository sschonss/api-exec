<?php

namespace Schons\ApiExec\Convert;

use Imagick;

class ConvPDF2Image extends Convert
{
    public function __construct($original_file, $converted_file)
    {
        parent::__contruct($original_file, $converted_file);
    }

    /**
     * @throws \ImagickException
     */
    public function convert(): void
    {
        $original_file = $this->getOriginalFile();
        $converted_file = $this->getConvertedFile();

        $extension = $this->getExtension($original_file);

        if ($extension == 'pdf') {
            //convert pdf to image
            $imagick = new Imagick();
            $imagick->setResolution(300, 300);
            $imagick->readImage($original_file);
            $imagick->setImageFormat('jpeg');
            $imagick->writeImages($converted_file, false);

        } else echo "Arquivo não é PDF". PHP_EOL;
    }

}