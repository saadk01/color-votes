<?php

/**
 * Autoload classes in Manager and Db namespaces.
 */
spl_autoload_register(function ($class) {
    // Be mindful of the directory structure for three main OSs (Lin, Mac, Win)
    if ('WIN' !== strtoupper(substr(PHP_OS, 0, 3))) {
        $class = str_replace('\\', '/', $class);
    }

    include $class . '.php';
});