<?php
use yii\widgets\ActiveForm;
use app\models\RegistrationForm;
use yii\helpers\Html;
?>
 <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Registration</div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(array(
                    'options' => array(
                        'method' => 'post'
                    )
                ));?>
                <?php $model = new RegistrationForm();?>
                <?= $form->field($model, 'email')->textInput(array(
                        'class'=>'form-control',
                        'placeholder' => 'Email'
                ));?>
                <?= $form->field($model, 'firstName')->textInput(array(
                        'class'=>'form-control',
                        'placeholder' => 'First name'
                ));?>
                <?= $form->field($model, 'lastName')->textInput(array(
                        'class'=>'form-control',
                        'placeholder' => 'Last name'
                ));?>
                <?= $form->field($model, 'password')->textInput(array(
                        'class'=>'form-control',
                        'placeholder' => 'Password'
                ));?>
                <?= $form->field($model, 'confirmPassword')->textInput(array(
                        'class'=>'form-control',
                        'placeholder' => 'Confirm password'
                ));?>
                <div class="form-actions">
                <?= Html::submitButton('Register', ['class' => 'btn btn-primary col-xs-12']);?>
                </div>
                <?php ActiveForm::end();?>
            </div>    
        </div> 
</div>      