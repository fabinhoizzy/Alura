<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33cdc4d86d8ff9247ebfb0c9adf5e999
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Solid\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Solid\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit33cdc4d86d8ff9247ebfb0c9adf5e999::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33cdc4d86d8ff9247ebfb0c9adf5e999::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33cdc4d86d8ff9247ebfb0c9adf5e999::$classMap;

        }, null, ClassLoader::class);
    }
}