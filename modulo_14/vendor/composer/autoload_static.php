<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita830f29c78afa9f46e4959c0ca24dc0e
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita830f29c78afa9f46e4959c0ca24dc0e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}