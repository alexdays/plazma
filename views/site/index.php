<?php

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\RegistrationForm;

/* @var $this yii\web\View */
$this->title = 'Plazma development';
?>
<div class="container">
    <div class="col-sm-9">
         <div class="panel panel-default">
            <div class="panel-heading">Places</div>
            <div class="panel-body">
            </div>    
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Join us</div>
            <div class="panel-body">
                <a href="user/register" class="btn btn-primary btn-lg btn-block">Registration</a>
                <a href="user/login" class="btn btn-primary btn-lg btn-block">login</a>
            </div>    
        </div>
    </div>
</div>
