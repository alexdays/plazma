<?php
namespace app\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle 
{
	public $sourcePath = '@app/protected/libs';
	public $js = [
		'yui/js/yui-min.js'
	];
}