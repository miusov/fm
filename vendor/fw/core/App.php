<?php

namespace fw\core;

use fw\core\Regestry;
use fw\core\ErrorHandler;

class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Regestry::instance();
        new ErrorHandler();
    }
}