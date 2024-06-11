<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita836c870eefa3440c35308ace4b860ad
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LucasandreDev\\LaravelCodeGenerator\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LucasandreDev\\LaravelCodeGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita836c870eefa3440c35308ace4b860ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita836c870eefa3440c35308ace4b860ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita836c870eefa3440c35308ace4b860ad::$classMap;

        }, null, ClassLoader::class);
    }
}
