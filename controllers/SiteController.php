<?php

namespace app\controllers;

use app\models\RegistrationForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\User;

class SiteController extends Controller
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
        $user = new User();
        $regForm = new RegistrationForm(Yii::$app->request->post('RegistrationForm'));
        if (isset($regForm) && $regForm->validate()) {
            $user->email = $regForm->email;
            $user->firstName = $regForm->firstName;
            $user->lastName = $regForm->lastName;
            $user->password = $regForm->password;
            $user->save();
        }
        return $this->render('index');
    }   

    public function actionRegister() 
    {

    } 
}
