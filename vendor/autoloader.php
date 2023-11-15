<?php


spl_autoload_register(function ($className) {
    $namespacePrefixes = [
        'Application\\' => dirname(__DIR__) . '/src/Application/',
        'Api\\' => dirname(__DIR__) . '/src/Api/',
        'Framework\\' => dirname(__DIR__) . '/src/Framework/',
        // Ajoutez d'autres préfixes au besoin
    ];

    foreach ($namespacePrefixes as $prefix => $baseDirectory) {
        $len = strlen($prefix);
        if (strncmp($prefix, $className, $len) === 0) {
            $relativeClass = substr($className, $len);
            $file = $baseDirectory . str_replace('\\', '/', $relativeClass) . '.php';

            try {
                if (file_exists($file) && !class_exists($className, false)) {
                    require $file;
                    return;
                } else {
                    throw new \RuntimeException("Class '$className' not found.");
                }
            } catch (\Exception $e) {
                global $logger;
                $logger->log('Error in autoloader: ' . $e->getMessage());
            }
        }
    }
});
