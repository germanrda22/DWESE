<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad6df8cb71819dd202a74f556a75e8b8
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitad6df8cb71819dd202a74f556a75e8b8::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitad6df8cb71819dd202a74f556a75e8b8::$classMap;

        }, null, ClassLoader::class);
    }
}
