<?php

namespace app\controllers;
use app\models\Main;
use R;
use fw\core\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use fw\core\base\View;
use PHPMailer\PHPMailer\PHPMailer;
use Gregwar\Captcha\CaptchaBuilder;
use fw\widgets\menu\Menu;

class MainController extends AppController
{
//    $this->layout = 'main';  //Задаем шаблон(layouts) для всех экшнов

    public function indexAction()
    {
        $main = new Main();

//        App::$app->getList();
//        $this->>layout = 'main';  //Задаем шаблон(layouts) для данного экшна
//        $this->layout = false;  //Запрещаем подключение шаблонов
//        $this->layout = 'default';  //подключаем дефолтный шаблон
//        $this->view = 'test';  //указываем с каким видом будем работать, если не указан, то вид выбирается по имени экшна
//        $city = R::findOne('city', 'id=5');
//        $citys = R::findAll('city');
//        echo $city['name'];
//        App::$app->cache->delete('users');
//        $this->set(['citys'=>$citys]);
        View::setMeta('Title', 'Description', 'Keywords');

//        $logger = new Logger('find city');
//        $logger->pushHandler(new StreamHandler(ROOT.'/logs/log', Logger::DEBUG));
//        $logger->debug('find city');
//
//        $mail = new PHPMailer;
//        $mail->isSMTP();
//        $mail->Host = 'smtp.gmail.com';
//        $mail->SMTPAuth = true;
//        $mail->Username = 'miusov@gmail.com';
//        $mail->Password = '********';
//        $mail->SMTPSecure = 'ssl';
//        $mail->Port = 465;
//
//        $mail->setFrom('from@example.com', 'Mailer');
//        $mail->addAddress('miusov86@gmail.com', 'Joe User');
//        $mail->isHTML(false);
//
//        $mail->Subject = 'Here is the subject';
//        $mail->Body    = 'This is the HTML <b>'.$var.'</b> message body <b>in bold!</b>';
//        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//        if(!$mail->send()) {
//            $res = 'Error: ' . $mail->ErrorInfo;
//        } else {
//            $res = 'OK';
//        }

//        if (isset($_POST['go']))
//        {
//            if ($_POST['cap'] == $_SESSION['phrase'])
//            {
//                echo "<div class='alert-success text-center'>Капча указана верно</div>";
//            }
//            else
//            {
//                echo "<div class='alert-danger text-center'>Не верно!</div>";
//            }
//        }
//
//        $builder = new CaptchaBuilder;
//        $builder->build();
//        $src = $builder->inline();
//        $_SESSION['phrase'] = $builder->getPhrase();
//
//
// 
//        $this->set(['src'=>$src]);
        
//        new Menu([
//            'tpl' => ROOT . '/vendor/widgets/menu/menu_tpl/select_menu.php',
//            'container' => 'select',
//            'class' => 'qwerty',
//            'table' => 'categories',
//            'cache' => 60,
//            'cacheKey' => 'select_menu',
//        ]);
//
//        new Menu([
//            'tpl' => ROOT . '/vendor/widgets/menu/menu_tpl/menu.php',
//            'container' => 'ul',
//            'class' => 'default',
//            'table' => 'categories',
//            'cache' => 60,
//            'cacheKey' => 'ul_menu',
//        ]);
    }
    
}
