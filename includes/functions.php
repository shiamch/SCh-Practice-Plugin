<?php

function my_plugin_autoloader($class_name) {
    // Check if the class file exists
    $class_file = MY_PLUGIN_DIR . 'classes/' . $class_name . '.php';

    if (file_exists($class_file)) {
        require_once $class_file;
    }
}

// Register the autoloader function
spl_autoload_register('my_plugin_autoloader');
