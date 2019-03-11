<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c6a70b222b78702ace3785399502f0a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nexti/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c6a70b222b78702ace3785399502f0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c6a70b222b78702ace3785399502f0a::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit8c6a70b222b78702ace3785399502f0a::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8c6a70b222b78702ace3785399502f0a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}