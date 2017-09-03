<?php

namespace app\controllers;
use app\models\Main;
use R;
use fw\core\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use fw\core\base\View;
use PHPMailer\PHPMailer\PHPMailer;
use fw\libs\Genpass;
use Gregwar\Captcha\CaptchaBuilder;

class TestController extends AppController
{
    public function indexAction()
    {
        $main = new Main();
    }

}