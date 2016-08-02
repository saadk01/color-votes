<?php

/**
 * Autoload classes in Manager and Db namespaces.
 */
spl_autoload_register(function ($class) {
    include $class . '.php';
});