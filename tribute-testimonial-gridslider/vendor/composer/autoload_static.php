<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae6b13a2903168526410655fb20290d5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae6b13a2903168526410655fb20290d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae6b13a2903168526410655fb20290d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitae6b13a2903168526410655fb20290d5::$classMap;

        }, null, ClassLoader::class);
    }
}
