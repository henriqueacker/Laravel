<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3f3a424c8327d6c2b23e53e5c4a0eddf
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3f3a424c8327d6c2b23e53e5c4a0eddf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3f3a424c8327d6c2b23e53e5c4a0eddf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit3f3a424c8327d6c2b23e53e5c4a0eddf::getInitializer($loader)();

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit3f3a424c8327d6c2b23e53e5c4a0eddf::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire3f3a424c8327d6c2b23e53e5c4a0eddf($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire3f3a424c8327d6c2b23e53e5c4a0eddf($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
