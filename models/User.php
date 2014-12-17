<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord 
{
	public $id;
	public $email;
	public $firstName;
	public $lastName;
	public $password;

	public static function tableName() 
	{
		return 'users';
	}

	public static function primaryKey() 
	{
		retur array('id');
	}
}