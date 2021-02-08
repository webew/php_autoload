<?php

spl_autoload_register(function ($className) {
    $fqcn = str_replace("App", "classes", $className);
    $chemin = str_replace("\\", "/", $fqcn);
    $fileName = $chemin . ".php";
    require_once $fileName;
});
