<?php
spl_autoload_register(function ($class) {
    $paths = [
        "src",
        "src\JediStates",
    ];
    for ($i = 0; $i < count($paths); $i++) {
        if (file_exists(BASEPATH . DIRECTORY_SEPARATOR . $paths[$i] . DIRECTORY_SEPARATOR . $class . '.php')) {
            require_once BASEPATH . DIRECTORY_SEPARATOR . $paths[$i] . DIRECTORY_SEPARATOR . $class . '.php';
        }
    }

});
?>