<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb91e8b0efbca869877632ec4c6eb0386
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'CFPropertyList' => 
            array (
                0 => __DIR__ . '/..' . '/rodneyrehm/plist/classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitb91e8b0efbca869877632ec4c6eb0386::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
