<?php
function autoload($dir) {
    $files = glob($dir . '/*');
    foreach ($files as $file) {
        if (is_dir($file)) {
            autoload($file); // Recursive call for subdirectories
        } else {
            if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
                require_once $file;
            }
        }
    }
}

// Register the autoloader
spl_autoload_register(function ($class) {
    // Define the root directory where your classes are located
    $rootDir = __DIR__;
    autoload($rootDir);
});