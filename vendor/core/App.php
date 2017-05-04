<?php

namespace vendor\core;

use vendor\core\Regestry;
use vendor\core\ErrorHandler;

class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Regestry::instance();
        new ErrorHandler();
    }
}