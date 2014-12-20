<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\RegistrationForm;
use Yii;

class UserController extends Controller 
{
    public function behaviors()
    {
        return [];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionRegister() 
	{
		$regFormReq = Yii::$app->request->post('RegistrationForm');
		if (isset($regFormReq)) {
			$regForm = new RegistrationForm($regFormReq);
			if ($regForm->validate()) {
				$user = new User();
				$user->email = $regForm->email;
				$user->firstName = $regForm->firstName;
				$user->lastName = $regForm->lastName;
				$user->password = $regForm->password;
				$user->save();
				return $this->redirect('site/index');
			}
		}
		return $this->render('register');
	}

	public function actionLogin() 
	{

	}

	public function actionLogout() 
	{

	}
}