<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd54e55d9af7112aeea9e54fae101d52a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd54e55d9af7112aeea9e54fae101d52a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd54e55d9af7112aeea9e54fae101d52a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd54e55d9af7112aeea9e54fae101d52a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
