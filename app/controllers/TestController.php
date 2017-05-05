<?php

namespace app\controllers;
use app\models\Main;
use R;
use vendor\core\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use vendor\core\base\View;
use PHPMailer\PHPMailer\PHPMailer;
use vendor\libs\Genpass;
use Gregwar\Captcha\CaptchaBuilder;

class TestController extends AppController
{
    public function indexAction()
    {
        $main = new Main();
    }

}