<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a9fa7b139c84c362e8e98ce8ef7c049
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Icreativez\\ChatApp\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Icreativez\\ChatApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a9fa7b139c84c362e8e98ce8ef7c049::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a9fa7b139c84c362e8e98ce8ef7c049::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a9fa7b139c84c362e8e98ce8ef7c049::$classMap;

        }, null, ClassLoader::class);
    }
}
