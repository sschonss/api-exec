<?php

require 'vendor/autoload.php';

use Schons\ApiExec\Convert\ConvPDF2Image;

$original_file = './public/files/pdf/file.pdf';
$converted_file = './public/files/images/file.jpeg';

$convert = new ConvPDF2Image($original_file, $converted_file);

$convert->convert();

echo "Arquivo convertido com sucesso". PHP_EOL;
