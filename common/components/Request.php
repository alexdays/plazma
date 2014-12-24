<?php

namespace app\common\components;

use Yii;
use yii\helpers\Json;

class Request extends \yii\web\Request 
{
	public $web;
	public $adminUrl;
	public function __construct() 
	{
		parent::__construct();

		if ($this->getIsPost()) {
            $body =  $this->getRawBody();
            $decodedBody = Json::decode($body, true);
            $this->setBodyParams($decodedBody);
        }
	}
} 