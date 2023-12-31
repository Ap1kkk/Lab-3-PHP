<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd54e55d9af7112aeea9e54fae101d52a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd54e55d9af7112aeea9e54fae101d52a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd54e55d9af7112aeea9e54fae101d52a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd54e55d9af7112aeea9e54fae101d52a::$classMap;

        }, null, ClassLoader::class);
    }
}
