<?php
spl_autoload_register(function($class_name) {
    // Define the base directory for your classes
    $baseDir = plugin_dir_path(__FILE__) . 'include' . DIRECTORY_SEPARATOR;

    // Normalize underscores to directory separators if using namespaces
    $classFile = str_replace(['_', '\\'], DIRECTORY_SEPARATOR, $class_name) . '.php';

    // Check if the file exists and include it
    $filePath = $baseDir . $classFile;
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});