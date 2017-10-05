<?php

namespace app\controllers;


use app\models\User;
use fw\core\base\View;

class UserController extends AppController
{
    public function signupAction()
    {
        if (!empty($_POST))
        {
            $user = new User;
            $data = $_POST;
            $user->load($data);

            if (!$user->validate($data) || !$user->checkUnique())
            {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if ($user->save('user'))
            {
            	$_SESSION['success'] = 'Вы успешно зарегистрировались';
            }
            else{
            	$_SESSION['error'] = 'Ошибка регистрации! Попробуйте позже';
            }
            redirect();
        }
        View::setMeta('Registration');
    }

    public function loginAction()
    {
    	if(!empty($_POST))
	    {
	    	$user = new User();
	    	if ($user->login())
		    {
		    	$_SESSION['success'] = 'Вы успешно авторизованы';
		    }
		    else
		    {
			    $_SESSION['error'] = 'Ошибка при входе! Попробуйте позже';
			}
			redirect('/');
	    }
		View::setMeta('Log in');
    }

    public function logoutAction()
    {
		if(isset($_SESSION['user'])) unset($_SESSION['user']);
		redirect('/user/login');
    }
}