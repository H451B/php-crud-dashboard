<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb050440d38144eb10e778ba4ea38bbf6
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hasib\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hasib\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb050440d38144eb10e778ba4ea38bbf6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb050440d38144eb10e778ba4ea38bbf6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb050440d38144eb10e778ba4ea38bbf6::$classMap;

        }, null, ClassLoader::class);
    }
}
