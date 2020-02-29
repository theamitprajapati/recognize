<?php
	$path = getenv('PATH');
putenv("PATH=$path:C:\Program Files\Tesseract_OCR");
//print_r($path);
	require_once __DIR__.'/vendor/autoload.php';
	use thiagoalessio\TesseractOCR\TesseractOCR;
	echo (new TesseractOCR('download.jpg'))
    ->run();
	
	//C:\ProgramData\chocolatey\lib\capture2text\tools\Capture2Text