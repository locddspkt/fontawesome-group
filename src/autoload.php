<?php
$mapping = array(
    'FontAwesomeGroupHelper\CommonFunction' => __DIR__ . '/CommonFunction.php',
    'FontAwesomeGroupHelper\FontAwesomeGroupHelper' => __DIR__ . '/FontAwesomeGroupHelper.php',
    'FontAwesomeGroupHelper\Constants' => __DIR__ . '/Constants.php',
    'FontAwesomeGroupHelper\FaIcon' => __DIR__ . '/FaIcon.php',

);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require_once $mapping[$class];
    }
}, true);