<?php

namespace app\models;

use yii\base\Model;
use app\models\User;

class RegistrationForm extends Model
{
	public $email;
	public $firstName;
	public $lastName;
	public $password;
	public $confirmPassword;

	public function rules() 
	{
		return [
			[['email', 'firstName', 'lastName', 'password', 'confirmPassword'], 'required'],
			['email', 'validateEmail'],
			['confirmPassword','validatePassword']
		];
	}

	public function validatePassword() 
	{
		if ($this->password != $this->confirmPassword) {
			$this->addError('confirmPassword', 'Not equals to password');
		}
	}

	public function validateEmail() 
	{
		$user = User::findByEmail($this->email);
		if($user) {
			$this->addError('email', 'Email already exsits');
		}
	}

	public function register() 
	{
		if ($this->validate()) {
			$user = User::findByEmail($this->email);
			return true;
		} else {
			return false;
		}
	}
}