<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit540bcce79afcdc7e7a70d6391d8c6069
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit540bcce79afcdc7e7a70d6391d8c6069::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit540bcce79afcdc7e7a70d6391d8c6069::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit540bcce79afcdc7e7a70d6391d8c6069::$classMap;

        }, null, ClassLoader::class);
    }
}
