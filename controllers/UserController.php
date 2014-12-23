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
        if (Yii::$app->request->getIsPost()) {
            Yii::$app->response->format='json';
            $regFormReq = Yii::$app->request->post('userData');
            if (isset($regFormReq)) {
                $regForm = new RegistrationForm($regFormReq);
                if ($regForm->validate()) {
                    $user = new User();
                    $user->email = $regForm->email;
                    $user->firstName = $regForm->firstName;
                    $user->lastName = $regForm->lastName;
                    $user->password = $regForm->password;
                    $user->save();
                } else {
                    return ["errors"=>"Errors with validation"];
                }
            }
        }
	}

	public function actionLogin() 
	{
        Yii::$app->response->format='json';
        if (Yii::$app->request->getIsPost()) return ["post"=>"post"];
        return ["login"=>"login"];
	}

	public function actionLogout() 
	{

	}
}