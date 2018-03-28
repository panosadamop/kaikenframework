<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58cae05228e780ed4d53dbc5961e5ebd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58cae05228e780ed4d53dbc5961e5ebd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58cae05228e780ed4d53dbc5961e5ebd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}