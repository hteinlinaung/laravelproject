<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb8e54340afa2232621af642db5fd976
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wpa25\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wpa25\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wpa25/src',
        ),
    );

    public static $classMap = array (
        'Config' => __DIR__ . '/../..' . '/wpa25/provider/ConfigProvider.php',
        'DB' => __DIR__ . '/../..' . '/wpa25/provider/Database.php',
        'LogInterface' => __DIR__ . '/../..' . '/wpa25/Log/interface/LogInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb8e54340afa2232621af642db5fd976::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb8e54340afa2232621af642db5fd976::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb8e54340afa2232621af642db5fd976::$classMap;

        }, null, ClassLoader::class);
    }
}
