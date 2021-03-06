<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d30403fafb3295b0e8fad6d78edd0b6
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d30403fafb3295b0e8fad6d78edd0b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d30403fafb3295b0e8fad6d78edd0b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
