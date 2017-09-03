<?php

namespace app\controllers\admin;


use fw\core\base\View;

class UserController extends AppController
{
    public function indexAction()
    {
        View::setMeta('Админка - Главная страница', 'Descr', 'keywords');

        $var = 'Test';

        $this->set(compact('var'));
    }

    public function testAction()
    {

    }
}