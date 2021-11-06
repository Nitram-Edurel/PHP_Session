<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c9f544ed2d8621538491857717d5fad
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wilder\\QuetesPhpCookiesSessions\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wilder\\QuetesPhpCookiesSessions\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c9f544ed2d8621538491857717d5fad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c9f544ed2d8621538491857717d5fad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c9f544ed2d8621538491857717d5fad::$classMap;

        }, null, ClassLoader::class);
    }
}