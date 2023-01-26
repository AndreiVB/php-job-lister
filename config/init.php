<?php

session_start();

require_once 'config.php';

require_once 'helpers/system_helper.php';

spl_autoload_register(function($class_name) {
    require_once 'lib/' .$class_name. '.php';
});

// function d($data)
// {
//     echo '<pre>';
//     var_dump($data);
//     echo '</pre>';
// }

// function dd($data)
// {
//     echo '<pre>';
//     var_dump($data);
//     echo '</pre>';
//     die();
// }

