<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit422ce54b7b0ecc4296e38b83244b57db
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

        spl_autoload_register(array('ComposerAutoloaderInit422ce54b7b0ecc4296e38b83244b57db', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit422ce54b7b0ecc4296e38b83244b57db', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit422ce54b7b0ecc4296e38b83244b57db::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}