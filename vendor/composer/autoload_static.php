<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2478be0de44ea6282a5c58a6425a754b
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2478be0de44ea6282a5c58a6425a754b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2478be0de44ea6282a5c58a6425a754b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2478be0de44ea6282a5c58a6425a754b::$classMap;

        }, null, ClassLoader::class);
    }
}
