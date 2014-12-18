<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord 
{
	public static function tableName()
	{
		return 'users';
	}

	public static function primaryKey() 
	{
		return array('id');
	}
    public static function findByEmail($email)
    {
        return parent::findOne(['email'=>$email]);
    }
}