<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0be31c92db648678a5dca6000187a71
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0be31c92db648678a5dca6000187a71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0be31c92db648678a5dca6000187a71::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
