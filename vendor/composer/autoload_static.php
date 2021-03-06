<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit191b4cdb8701244fcb1926b6981b24c8
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit191b4cdb8701244fcb1926b6981b24c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit191b4cdb8701244fcb1926b6981b24c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
