<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit422ce54b7b0ecc4296e38b83244b57db
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit422ce54b7b0ecc4296e38b83244b57db::$classMap;

        }, null, ClassLoader::class);
    }
}
